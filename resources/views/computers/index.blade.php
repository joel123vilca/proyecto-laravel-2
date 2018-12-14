
@extends('computers.layout')

@section('content')
<h1 class="text-center">lista de computadoras </h1>
<div class="container">
<a class="btn btn-info mb-3" href="{{ route('computers.create') }}">Add Computer</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Marca</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($computers as $computer)
    <tr>
      <th scope="row">{{ $computer->id }}</th>
      <td>{{ $computer->marca }}</td>
      <td>{{ $computer->descripcion }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $computers->links()}}
</div>




@endsection