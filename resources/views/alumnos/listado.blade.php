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
<h1>Listado de alumnos</h1>
<a href="{{route('alumno.create')}}">Crear alumno</a>
<table>
    <caption>Todos los alumnos</caption>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>direccion</th>
    </tr>
    @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>
                <form method="POST" action="{{route('alumno.destroy',$alumno->id)}}" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar" />
                </form>
            </td>
            <td><a href="{{route('alumno.edit',$alumno->id )}}">Editar</a></td>
        </tr>
    @endforeach

</table>

</body>
</html>
