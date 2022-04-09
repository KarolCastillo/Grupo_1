<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>karol090919052</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-light bg-primary">
    <a class="navbar-brand" href="{{url('/')}}">
        <i class="fab fa-bitcoin fa-2x"></i>
        LISTADO CRIPTOMONEDA
    </a>

    <a class="navbar-brand float-left" href="{{url('/lenguaje')}}">
        <i class="fas fa-code fa-2x"></i>
        LISTADO LENGUAJE PROGRAMACION
    </a>




</nav>
<div class="container">
    @yield('content')
</div>

</body>
</html>
