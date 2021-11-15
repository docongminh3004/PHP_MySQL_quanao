@extends('layout.admin.layout')

@section('title', 'Edit Category list')
@section('main')
<form role="form" action="{{ route('category.update',$categories->id) }}" method="POST">
     @csrf @method('PUT')
    <div class="form-group">
      
      
       
        <input type="hidden" class="form-control" id="" name="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">tên loại</label>
        <input type="text" value="{{$categories->name}}" class="form-control" id=""name="name" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">desc</label>
        <input type="text"value="{{$categories->desc}}"  class="form-control" id="" name="desc" placeholder="">
      </div>
      <div class="form-group">
        <label for="">status</label>
        <input type="text" value="{{$categories->status}}" class="form-control" id="" name="status" placeholder="">
      </div>
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('category.index')}}">Quay lại<span></span></a>
     
</form>

@stop