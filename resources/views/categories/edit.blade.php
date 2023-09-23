@extends('layouts.master')

@section('content')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="mb-3 mt-3">
    <button type="submit"  class="btn btn-warning">edit</button>
    <button type="reset"  class="btn btn-secondary">cancel</button>
  </div>

@endsection