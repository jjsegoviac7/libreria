<html lang="en">
<head>
    <title>Curso Virtua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="post" action="{{ route('login') }}">
    {{csrf_field()}}
<button class ="btn">Nuevo</button>
    </form>
<form class="form-control" action="{{ route('actualizarlibro', $libro->id) }}" method="post">
    {{ csrf_field() }}
    @include('libros.error')
    <label>Nombre del libro</label>
    <input type="text" name="nombre" class="form-control" value="{{$libro->Nombre}}">

    <label>Autor</label>
    <input type="text" name="autor" class="form-control" value="{{$libro->Autor}}">

    <label>Editorial</label>
    <input type="text" name="editorial" class="form-control" value="{{$libro->Editorial}}">

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
