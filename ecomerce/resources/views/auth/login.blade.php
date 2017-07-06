<!-- resources/views/auth/login.blade.php -->

@extends('store.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user">Iniciar Sesión</i></h1>
        </div>
        
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="page">

                    @include('store.partials.errors')

                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            Correo Electronico
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            Password
                            <input class="form-control"type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember"> Recordarme
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                </form>
                </div>
            </div> 
        </div>       
    </div>
 @stop
