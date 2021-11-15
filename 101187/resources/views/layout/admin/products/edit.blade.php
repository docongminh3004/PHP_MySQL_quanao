@extends('layout.admin.layout')

@section('title', 'Edit Category list')
@section('main')
<form role="form" action="{{route('product.update',$product->id)}}" method="POST">
     @csrf @method('PUT')
    <div class="form-group">
      
      
       
        <input type="hidden" class="form-control" id="" name="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">tên sản phẩm</label>
        <input type="text" value="{{$product->prd_name}}" class="form-control" id=""name="prd_name" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">image</label>
        <input type="file" value="{{$product->image}}"class="form-control" id="" name="image" placeholder="">
      </div>
      <div class="form-group">
        <label for="">price</label>
        <input type="text" value="{{$product->price}}" class="form-control" id="" name="price" placeholder="">
      </div>
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="">Quay lại<span></span></a>
     
</form>

@stop