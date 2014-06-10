<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    {{ HTML::style('css/bootstrap.min.css'); }}
</head>
<body>
    <div class="container">
        <h1>Bienvenido {{ Auth::user()->name; }}</h1>
        <a href="./logout">Cerrar sesión.</a>
    </div>
    {{ HTML::script('js/jquery.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
</body>
</html>