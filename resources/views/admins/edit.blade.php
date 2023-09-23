@extends('layouts.master')

@section('content')
    <form action="{{ url('login-ad/' . $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="adminName" value="{{ $admin->name }}" id="exampleFormControlInput1"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <textarea name="adminEmail" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $admin->email }}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <textarea name="adminPassword" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $admin->password }}</textarea>
        </div>

        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-warning">update</button>
            <button type="reset" class="btn btn-secondary">cancel</button>
        </div>

    </form>
@endsection
