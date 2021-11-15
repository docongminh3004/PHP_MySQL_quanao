@extends('layout.admin.layout')
@section('title', 'Blog list')
@section('main')

<form action=""  class="form-inline">

     <div class="form-group">
         <input  class="form-control" name="key" placeholder="Search By Name..">
     </div>

         <button type="submit" class="btn btn-primary">
           <i class="fas fa-search"></i>
         </button>
</form>
<hr>
                        <h3 class="box-title"> <a class="btn btn-primary" href="">Thêm mới</a></h3>
                    </div>
                   <div class="box-header col-xs-4">
                    <form class="form-inline">                      
                        <div class="form-group mx-sm-3 mb-2">
                          <input type="text" class="form-control" name="key" placeholder="Tìm kiếm ...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
                      </form>
                   </div>
                   <div class="col-xs-12">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="alert alert-error">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Thương Hiệu</th>
                                    <th>Nội Dung</th>
                                    <th>Trạng thái</th>
                                    <th>Actions</th>
                            </thead>
                            <tbody>
                                  @foreach($blog as $key => $pro)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td><img src="/101187/public/page/images/{{$pro->blog_image}}" style="max-width:200px" alt=""></td>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ $pro->blog_content }}</td>
                                            <td>
                                            
                                            
                                            <td>
                                            <a class="btn btn-success glyphicon glyphicon-edit" href=""></a>
                                                <a class="btn btn-danger glyphicon glyphicon-trash btndelete" onclick="return confirm('Bạn có muốn xóa không?');" href="{{ route('blog.destroy',$pro->id) }}"></a>
                                             </td>
                                        </tr>
                              @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{$blog->appends(request()->all())->links()}}
                        </div>
                        <form action="" method="POST" id="form-delete">
                            @csrf @method('DELETE')
                        </form>
                    </div>
                    <!-- /.box-body -->
               
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('js')
    <script>
        $('.btndelete').click(function(ev){
            ev.preventDefault();
            var _href=$(this).attr('href');
            $('form#form-delete').attr('action',_href);
            $('form#form-delete').submit();
        })
    </script>


@stop()