@extends ('layouts.master')

@section('content')
    <div class="card-header">
        <a href="{{ url('login-ad/create') }}">
            <button class="btn btn-success">create</button>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $value)
                <tr>
                    <th scope="row">{{ $value->id }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->password }}</td>

                    <div class="d-flex">

                        <th>
                            <a href="{{ url('/login-ad/' . $value->id . '/edit') }}">
                                <button class="btn btn-warning">edit</button></a>
                            <form action="{{ url('login-ad/' . $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="sumbit" class="btn btn-danger">Delete</button>


                            </form>

                        </th>
                    </div>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $admin }}
@endsection
