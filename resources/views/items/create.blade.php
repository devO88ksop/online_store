@extends('layouts.master')

@section('content')
<form action="{{ url('admin/item') }}" method="POST">
  @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">sub_category_id</label>
    <select name="sub_category_id" id="" class="form-control">
      @forelse ($sub_categories as $sub_category)
      <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
          
      @empty
          
      @endforelse
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="price@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">qty</label>
    <input type="text" name="qty" class="form-control" id="exampleFormControlInput1" placeholder="qty@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Image</label>
    <input type="text" name="image" class="form-control" id="exampleFormControlInput1" placeholder="image@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-success">save</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>
</form>

@endsection