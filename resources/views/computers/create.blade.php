@extends('computers.layout')
@section('content')
<h1>Create Computer</h1>
<div class="container">
<form action="{{route('computers.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca" aria-describedby="helpmarca" placeholder="Marca">
     </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection