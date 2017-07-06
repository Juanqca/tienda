@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-users"></i>Registro de Usuarios</h1>
		</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="page text-center">
							<form method="POST" action="/auth/register">
								    {!! csrf_field() !!}

								    <div class="col-md-6 form-group">
								       Nombres
								        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
								    </div>
									<div class="col-md-6 form-group">
								        Apellidos
								        <input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
								    </div>
								    <div class="col-md-6 form-group">
								        Correo Electronico
								        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
								    </div>
								 <div class="col-md-6 form-group">
								        Nombre de Usuario
								        <input class="form-control" type="text" name="user" value="{{ old('user') }}">
								    </div>
								    <div class="col-md-6 form-group">
								        Contraseña
								        <input class="form-control" type="password" name="password">
								    </div>

								    <div class="col-md-6 form-group">
								        Confirme su contraseña
								        <input class="form-control" type="password" name="password_confirmation">
								    </div>
								    <div class="form-group">
								        <button class="btn btn-primary" type="submit">Registrar <i class="fa fa-thumbs-up"></i></button>
								    </div>
							</form>
						</div>
				</div>
		</div>	
	</div>
@stop