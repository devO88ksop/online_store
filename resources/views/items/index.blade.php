@extends ('layouts.master')

@section('content')

<div class="card-header"><a href="{{ url('admin/item/create')}}"><button class="btn btn-primary">create</button></a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">sub_category_id</th>
        <th scope="col">price</th>
        <th scope="col">qty</th>
        <th scope="col">image</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($item as $value)
      <tr>
        <th scope="row">{{ $value->id }}</th>
        <td>{{ $value->name}}</td>
        <td>{{$value->sub_category->name}}</td>
        <td>{{$value->price}}</td>
        <td>{{$value->qty}}</td>
        <td>{{$value->image}}</td>
        <td>{{ $value->description}}</td>
      
        <th>
          <a href="{{ url('admin/item/'.$value->id.'/edit')}}"><button class="btn btn-warning">edit</button></a>
          <a href="{{ url('admin/item/'.$value->id)}}"><button class="btn btn-secondary">show</button></a>

          <form action="{{ url('admin/item/'.$value->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="sumbit" class="btn btn-danger">Delete</button>


          </form>
          
        </th>
      </tr>
      @endforeach
   
    </tbody>
  </table>
  {{$item}}
@endsection