@extends('layouts.master')

@section('content')
<form action="{{url('admin/company')}}" method="POST">
@csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">phone number</label>
    <textarea name="phone_number" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-success">save</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>
</form>

@endsection