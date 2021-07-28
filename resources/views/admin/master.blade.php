<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Archivo CSS -->
    <link rel="stylesheet" href="{{url('/static/css/admin.css?v='.time())}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Kit de Fonts -->
    <script src="https://kit.fontawesome.com/ee212b47c6.js" crossorigin="anonymous"></script>
    <!-- Libreria de JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Titulo  -->
    <title>@yield('title') - MyCms</title>
    <!-- El token para los formnularios -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- El nombre del router que estamos ejecutando -->
    <meta name="routename" content="{{ Route::currentRouteName() }}">

    <script>
        $(document).ready(function{
            $('[data.toggle="tooltip"]').tooltip()
        });
    </script>
</head>
<body>

    <div class="wrapper">
        <div class="col1">@include('admin.sidebar')</div>
        
        <div class="col2">
            <nav class="navbar navbar-expand-lg shadow">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/admin')}}" class="nav-link">
                            <i class="fas fa-home"></i>Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="page">

                <div class="container-fluid">
                    <nav aria-label="breadcrumb shadow">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin')}}" class="nav-link">
                                    <i class="fas fa-home"></i>Dashboard
                                </a>
                            </li>
                            @section('breadcrumb')                               
                            @show
                        </ol>
                    </nav>
                </div>

                <!-- Mensaje de alerta de errores -->
                @if(Session::has('message'))
                <div class="container-fluid">
                    <div class="alert alert-{{ Session::get('typealert') }} mtop16" 
                    style="display:block; margin-bottom:16px;">
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

                @section('content')
                @show

            </div>
        </div>


    </div>
    
</body>
</html>