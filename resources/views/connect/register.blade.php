@extends('connect.master')

@section('title','Register')
    
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

        {!! Form::open(['url' => '/register']) !!}

        <!-- Campo del Nombre -->
        <label for="name">Name: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control']) !!}       
        </div>  
        <!-- Campo de lastname -->
        <label for="lastname">Lastname: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-plus"></i></div>
            </div>
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}       
        </div>  
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

        <!-- Campo de confirmar Password -->
        <label for="rpassword" class="mtop16">Repeat Password: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            {!! Form::password('rpassword', ['class' => 'form-control']) !!}       
        </div>

        {!! Form::submit('Registrar', ['class' => 'btn btn-success mtop16']) !!}   
        {!! Form::close() !!}

        <div class="footer mtop16">
            <a href="{{ url('/login') }}">Ya tengo cuenta</a>
        </div>
    </div>
</div>   
@stop