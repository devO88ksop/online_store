@extends('layouts.master')

@section('content')

<form action="{{ url('admin/company/'.$company->id)}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{$company->name}}" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
    <textarea name="phone_number"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$company->phone_number}}</textarea>
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-warning">update</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>

</form>

@endsection