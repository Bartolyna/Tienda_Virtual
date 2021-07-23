<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Archivo CSS -->
    <link rel="stylesheet" href="{{url('/static/css/connect.css?v='.time())}}">
    <!-- Kit de Fonts -->
    <script src="https://kit.fontawesome.com/ee212b47c6.js" crossorigin="anonymous"></script>
    <!-- Libreria de JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyCms - @yield('title')</title>
</head>
<body>

    @section('content')
        
    @show
    
    
</body>
</html>