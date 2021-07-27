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
        <label for="name" class="mtop16">Nombre: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}       
        </div>  
        <!-- Campo de lastname -->
        <label for="lastname" class="mtop16">Apellido: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user-plus"></i></div>
            </div>
            {!! Form::text('lastname', null, ['class' => 'form-control', 'required']) !!}       
        </div>  
        <!-- Campo de Email -->
        <label for="email" class="mtop16">Correo electronico: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
            </div>
            {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}       
        </div>  
        <!-- Campo de Password -->
        <label for="password" class="mtop16">Contraseña: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            {!! Form::password('password', ['class' => 'form-control', 'required']) !!}       
        </div>

        <!-- Campo de confirmar Password -->
        <label for="rpassword" class="mtop16">Repetir contraseña: </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-key"></i></div>
            </div>
            {!! Form::password('rpassword', ['class' => 'form-control', 'required']) !!}       
        </div>

        {!! Form::submit('Registrar', ['class' => 'btn btn-success mtop16']) !!}   
        {!! Form::close() !!}

        <!-- Mensaje de alerta de errores -->
        @if(Session::has('message'))
            <div class="container mtop16">
                <div class="alert alert-{{ Session::get('typealert') }}" style="display:none;">
                    {{ Session::get('message') }}
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li> 
                            @endforeach
                        </ul>  
                    @endif
                    <script>
                        $('.alert').slideDown();
                        setTimeout( function() {$('.alert').slideUp();}, 15000);
                    </script>
                </div>
            </div>        
        @endif

        <div class="footer mtop16">
            <a href="{{ url('/login') }}">Ya tengo cuenta</a>
        </div>
    </div>
</div>   
@stop