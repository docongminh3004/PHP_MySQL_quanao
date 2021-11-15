@extends('layout.admin.layout')

@section('title', 'Product list')
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
<a class="btn btn-primary" href="{{route('product.create')}}">Them san pham</a>
@php
$stt=1
     @endphp
     <table id="example2" class="table table-bordered table-hover">
     <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>category_id</th>
            <th>image</th>
            <th>price</th>
            <th>quantily</th>
            <th>description</th>
            <th>brand_id</th>
            <th class="text-right"> Actions</th>
        </tr>
     </thead>
     <tbody>

     @foreach($data as $cat)
         <tr>
             <td>{{$stt++}}</td>
             <td>{{$cat->prd_name}}</td>
             <td>{{$cat->category_id}}</td>
             <td><img src="/101187/public/page/images/{{$cat->image}}" style="max-width:100px" alt=""></td>
             <td>{{$cat->price}}</td>
             <td>{{$cat->quantily}}</td>
             <td>{{$cat->description}}</td>
             <td>{{$cat->brand_id}}</td>

             <td class="text-right">
               <a href="{{route('product.edit',$cat->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
               </a>
               <a href="{{route('product.destroy',$cat->id)}}" class="btn btn-sm btn-danger  btndelete">
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
@stop
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


