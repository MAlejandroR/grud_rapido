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
<form action="{{route('alumno.store')}}" method="POST">
    @csrf
    Nombre <input type="text" name="nombre" placeholder="nombre" id=""><br />
    Apellido <input type="text" name="apellido" placeholder="apellido" id=""><br />
    Dirección <input type="text" name="direccion" placeholder="direccion" id=""><br />
    <input type="submit" value="Crear Alumno">


</form>

</body>
</html>
