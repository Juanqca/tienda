@extends('admin.template')
@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>PRODUCTOS <small>[Agregar producto]</small>
			</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="page">
				@if(count($errors)>0)
					@include('admin.partials.errors')
				@endif

				{!! Form::open(['route'=>'admin.product.store','method'=>'post','files'=>true ]) !!}

				<div class="form-group">
					<label class="control-label" for="category_id">Categoria:</label>
					{!!
						Form::select(
								'category_id',
								$categories,
								null,
								[
									'class'=>'form-control'
								]
							)
					!!}
				</div>

				<div class="form-group">
					<label for="name">Nombre:</label>
					{!!
						Form::text(
							'name',
							null,
							array(
								'class'=>'form-control',
								'placeholder'=>'ingresa el nombre....',
								'autofocus'=>'autofocus'

								)
							)
					!!}
				</div>

				<div class="form-group">
					<label for="extract">Extracto:</label>
					{!! Form::text(
						'extract',
						null,
						array(
							'class'=>'form-control',
							'placeholder'=>'ingresa el extracto....'	
						))!!}
				</div> 
				<div class="form-group">
					<label for="description">Descripcion:</label>
					{!! Form::textarea(
						'description',
						null,
						array(
							'class'=>'form-control'
							
						))!!}
				</div>
				<div class="form-group">
					<label for="price">Precio:</label>
					{!! Form::text(
						'price',
						null,
						array(
							'class'=>'form-control',
							'placeholder'=>'ingrese el precio'
						))!!}
				</div>
				
				<div class="form-group">
					<label for="image">Imagen:</label>
					
				{!! Form::file(
					'image',
					null,
					array(
						'class'=>'form-control'
					)) !!}
				</div>

				<div class="form-group">
					<label for="visible">Visible:</label>
					{!! Form::checkbox(
						'visible',
						null,
						array(
							'class'=>'form-control'
						))!!}
				</div>

				<div class="form-group text-center">
					{!! Form::submit(
						'Guardar',
						array(
							'class'=>'btn btn-primary'
						))!!}
						<a href="{{ route('admin.product.index') }}" class="btn btn-warning">Cancelar</a>
				</div>


<hr>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>