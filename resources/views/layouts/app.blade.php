<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title") Laravel - app</title>
    <!-- CSS only -->
   <!-- CSS only -->
   @include('sweetalert::alert')
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="flex sm:justify-center space-x-4 p-2    ">
            <div class="w-50 px-12">
                    <h1>Sistema de Ventas</h1>
            </div>

            <a href="{{route('createclientes.index')}}">Clientes</a>
            <a href="{{route('createusers.index')}}">Usuarios</a>
            <a href="{{route('createProducto.index')}}">Productos</a>
            <a href="{{route('login.index')}}">Login</a>
            <a href="{{route('register.index')}}">Register</a>
          
    </nav>

    @yield("content")

    
</body>
</html>