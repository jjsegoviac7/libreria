@extends('layouts.app')

@section('content')
<html>
<head>
	<title>Proyecto4</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
	{{csrf_field()}}
<button class ="btn">Nuevo</button>
	</form>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Autor</th>
			<th>Editorial</th>
			<th>Acciones</th>
		<tr>
	</thead>
	<tbody>
		@foreach($libros as $libro)
		<tr>
			<td>{{$libro->id}}	</td>
			<td>{{$libro->Nombre}}	</td>
			<td>{{$libro->Autor}}	</td>
			<td>{{$libro->Editorial}}	</td>
			<td>

				<a href="{{ route('borrarcliente',['id'=>$libro->id])}}" onclick="
return confirm('Estas seguro de eliminar este registro?')"
    class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"
        aria-hidden="true"> Eliminar</span></a>


			   <form action="{{route('editarlibro',['id'=>$libro->id])}}" method="post">
					{{csrf_field()}}
					<button class ="btn">Actualisar</button>
				</form>
						
			</td>

		</tr>	

		@endforeach
	</tbody>

</table>

</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
@endsection