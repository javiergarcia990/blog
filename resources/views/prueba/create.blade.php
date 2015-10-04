@extends('layout.cuerpo')
@section('contenido')
<form action="{{route('user.store')}}" method="POST">
<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Nuevo Usuario</h3>
      </div>
      <div class="panel-body">
      	<div class="col-md-6 form-group">
      		<label for="e-mail">E-mail</label>
        	<input id="e-mail" type="text" class="form-control" placeholder='E-mail' name="email">
        </div>
        <div class="col-md-6  form-group">
      		<label for="password">Password</label>
        	<input id='password' type="text" class="form-control" placeholder='Password' name="password">
        </div>
        <div class="col-md-6  form-group">
      		<label for="nombre">Nombre</label>
        	<input id="nombre" type="text" class="form-control" placeholder='Nombre' name="nombre">
        </div>
        <div class="col-md-6  form-group">
      		<label for="apellido">Apellido</label>
        	<input id="apellido" type="text" class="form-control" placeholder='Apellido' name="apellido">
        </div>
         <div class="col-xs-6 col-sm-9 col-md-9 form-group">
        	<input type="submit" class="btn btn-primary" value="Registrar">
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 form-group">
        	<input type="submit" class="btn btn-danger" value="Cancelar">
        </div>
      </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@stop