<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>


</head>
<body>
<nav role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">{{ config('app.name') }}</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Inicio</a></li>
        </ul>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Inicio</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

@section('sidebar')
@show
<div class="container">
    @yield('content')
</div>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
