@extends('layouts.master')

@section('content')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{old('name')}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label" >Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
  </div>



@endsection
