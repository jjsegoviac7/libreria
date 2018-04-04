@if(session()->has('msj'))
<div class ="alert alert-success" role="alert">{{session('msj')}}</div>
@else
@endif
<html>
<head>
	<title>Libreria</title>
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

	<div class="col-md-6">
        @include('libros.error')
        
		<form action="{{route('guardarlibro')}}" method="post">
			{{csrf_field()}}
			
		<label> Nombre del libro</label>
		<input type="tex" name ="nombre" class="form-control" > 

		<label> Autor</label>
		<input type="tex" name ="autor" class="form-control"> 

		<label> Editorial</label>
		<input type="tex" name ="editorial" class="form-control"> 
		<br><br>

		<button type="submit" class="btn btn-primary"> Guardar</button>	
		</form>
	</div>
	<form class="form-horizontal"  action="{{ route('listarlibro') }}" method="post">
	{{csrf_field()}}
<button type="submit" class ="btn btn-primary">mostrar libros </button>
	</form>
</body>
</html>
@endsection






