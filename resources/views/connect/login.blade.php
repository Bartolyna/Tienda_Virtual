@extends('connect.master')

@section('title','Login')
    
@section('content')

<div class="box box_login shadow">
    <!-- Logo del la empresa -->
        <div class="header">
            <a  href="{{ url('/')}}" >
                <img class="img" src="{{ url('/static/imagenes/logo.png') }}" >
            </a>
        </div>
    <!-- Creacion del formulario -->
    <div class="inside">

        {!! Form::open(['url' => '/login']) !!}
        
        <!-- Campo de Email -->
        <label for="email">Email: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>
            {!! Form::email('email', null, ['class' => 'form-control']) !!}       
        </div>  
        <!-- Campo de Password -->
        <label for="password" class="mtop16">Password: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            {!! Form::password('password', ['class' => 'form-control']) !!}       
        </div>

        {!! Form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}   
        {!! Form::close() !!}
    
        <div class="footer mtop16">
            <a href="{{ url('/register') }}">¿No tienes cuenta?, Registrate</a>
            <br>
            <a href="{{ url('/recover') }}">Recuperar cuenta</a>
        </div>
    </div>
</div>   
@stop