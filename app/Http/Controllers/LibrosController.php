<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libros;
use App\Http\Requests\LibrosRequest;
class LibrosController extends Controller
{
   public function index()
   {
   	return view ('libros.index');
   }

    public function store(LibrosRequest $request)
   {
  
  	$libros= new Libros;

   	$libros->Nombre =$request->nombre;
  	$libros->Autor =$request->autor;
    $libros->Editorial =$request->editorial;
 
   	if($libros->save()) {

    return back()->with('msj','Datos guardados');
     }else   {
      return back('msj','error al guardar los datos');
      }


   	return view ('libros.index');
   }
   public function listar()
   {
   	$libros=Libros::all();

    return view('libros.listar')
    ->with('libros',$libros);
	}
	public function destroy($id)
	{

		$libro = Libros::find($id);
		$libro->delete();

        $libros=Libros::all();
    return view('libros.listar')
    ->with('libros',$libros);
	}
	public function show($id)
	{
		$libro = Libros::find($id);
	 return view('libros.editar')
    ->with('libro',$libro);
	}
	public function update (LibrosRequest $request, $id)
	{
		$libro = Libros::find($id);
		$libro->Nombre = $request->nombre;
   	$libro->Autor = $request->autor;
   	$libro->Editorial = $request->editorial;
		$libro->update();

       $libros=Libros::all();
    return view('libros.listar')
    ->with('libros',$libros);
	}
}

