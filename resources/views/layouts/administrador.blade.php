<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
    <nav class="nav">

        <a class="toggle-nav" href="#">&#9776;</a>

        <div class="nav-mobile">
            <ul class="left">
                <li><a href="#">Estudiantes</a></li>
                <li><a href="#">Docentes</a></li>
                <li><a href="#">Actividades</a></li>
            </ul>
            <ul class="right">
                <li>
                    <a href="#">Registrarse</a>
                </li>
                <li>
                    <a href="#">Acceder <i class="fa fa-caret-down"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')


    <script src="js/jquery.js"></script>
    <script src="{{ asset('js/nav-mobile.js') }}"></script>

</body>
</html>