@extends('layouts.master')

@section('content')
<form action="{{ url('login-ad') }}" method="POST">
  @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="adminName" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" name="adminEmail" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Password</label>
    <input type="text" name="adminPassword" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-success">save</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>
</form>

@endsection
