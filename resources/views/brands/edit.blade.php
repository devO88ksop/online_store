@extends('layouts.master')

@section('content')

<form action="{{ url('admin/brand/'.$brand->id)}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$brand->name}}" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$brand->description}}</textarea>
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-warning">update</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>

</form>

@endsection