@extends('layout.admin.layout')

@section('title', 'Category list')
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
<a class="btn btn-primary" href="{{route('category.create')}}">Them loai san pham</a>
@php
$stt=1
     @endphp
     <table id="example2" class="table table-bordered table-hover">
     <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>desc</th>
            <th>status</th>
            <th>created date</th>
            
            <th class="text-right"> Actions</th>
        </tr>
     </thead>
     <tbody>

     @foreach($data as $cat)
         <tr>
             <td>{{$stt++}}</td>
             <td>{{$cat->name}}</td>
             <td>{{$cat->desc}}</td>
             <td><?php
             if($cat->status==0){
              ?>
              <a href="" class="btn-danger">Đang khóa</a>
              <?php
               }else{
              ?>  
               <a href="" class="btn-success">Hoạt động</span></a>
              <?php
             }
            ?> </td>
             <td>{{$cat->created_at->format('m-d-Y')}}</td>
            
             <td class="text-right">
             
               
               <a href="{{route('category.edit',$cat->id)}}" class="btn btn-sm btn-success">
         
                    <i class="fas fa-edit"></i>
               </a>
               <a href="{{route('category.destroy',$cat->id)}}" class="btn btn-sm btn-danger  btndelete">
                    <i class="fas fa-trash"></i>
               </a>    
            </td>  
         </tr>

     @endforeach    
     </tbody>
</table>
<form method="POST" action="" id="form-delete">
     @csrf @method('DELETE')
</form>


@stop();

@section('js')
<script>
    $('.btndelete').click(function(ev){
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action',_href);
        if(confirm('Bạn có chăc muốn xóa không ?')){
            $('form#form-delete').submit();
        }
    })
</script>    

@stop()