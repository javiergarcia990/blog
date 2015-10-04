@extends('layout.cuerpo')
@section('contenido')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Inicio de Sesion</h3>
    </div>
      <div class="panel-body">
		<div class="row">

				<div class="col-md-6 form-group">
				<label for="usuario">Usuario</label>
					<input type="text" id="usuario" class="form-control" placeholder='Usuario'>
				</div>

				<div class="col-md-6 form-group">
				<label for="Password">Password</label>
					<input type="text" id="Password" class="form-control" placeholder='Password'>
				</div>

				<div class="col-md-2 form-group">
					<input type="submit" value="Entrar" class="btn btn-primary">
				</div>
				<div class="col-md-offset-10 form-group">
					<input type="submit" value="Cancelar" class="btn btn-danger">
				</div>
				
			
		</div>
	</div>
</div>
@stop