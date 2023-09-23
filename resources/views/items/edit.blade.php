@extends('layouts.master')

@section('content')

<form action="{{ url('admin/item/'.$item->id)}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$item->name}}" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">sub_category_id</label>
    <textarea name="category_id"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$item->sub_category_id}}</textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" value="{{$item->price}}" id="exampleFormControlInput1" placeholder="price@example.com">
  </div>
  <label for="exampleFormControlInput1" class="form-label">qty</label>
    <input type="number" class="form-control" name="qty" value="{{$item->qty}}" id="exampleFormControlInput1" placeholder="qty@example.com">
  </div>
  <label for="exampleFormControlInput1" class="form-label">Image</label>
    <input type="text" class="form-control" name="image" value="{{$item->image}}" id="exampleFormControlInput1" placeholder="image@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$item->description}}</textarea>
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-warning">update</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>

</form>

@endsection