<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="h-15 bg-green-200">
    <h1>Cabecera</h1>
</header>
<nav>
    @auth
        Logueado como {{auth()->user()->name}}
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" value="Desloguearme">
        </form>


    @endauth
    @guest
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Registrarme</a>
    @endguest
</nav>
<main>

</main>
<footer>

</footer>
</body>
</html>
