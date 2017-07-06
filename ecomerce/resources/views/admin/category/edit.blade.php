@extends('admin.template')
@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>CATEGORIAS <small>Editar Categoria</small>
			</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="page">
				@if(count($errors)>0)
					@include('admin.partials.errors')
				@endif

				
				{!!Form::model($category, array('route' => array('admin.category.update', $category)))!!}

				<input type="hidden" name="_method" value="PUT">

				<div class="form-group">
					<label for="name">Nombre:</label>
					{!!
						Form::text(
								'name',
								null,
								array(
									'class'=>'form-control',
									'placeholder'=>'ingrese el  nombre...',
									'autofocus'=>'autofocus'
									)
							)
					!!}
				</div>

				<div class="form-group">
					<label for="description">Descripcíon:</label>
					{!!
						Form::textarea(
							'description',
							null,
							array(
								'class'=>'form-control'
								)
							)
					!!}
				</div>

				<div class="form-group">
					<label for="color">Color:</label>
					<input type="color" name="color" class="form-control" value="{{ isset($category->color)? $category->color : null}}">
				</div> 
<hr>
				<div class="form-group text-center">
					{!! Form::submit('Actualizar',array('class'=>'btn btn-primary')) !!}
					<a href="{{ route('admin.category.index') }}" class="btn btn-warning">Cancelar</a>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@stop