<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Modelo;
use App\Producto;

class ProductosControlador extends Controller
{
  public function faq(){
return view ('FAQ');

  }
    public function listar(){
    $productos = Producto::paginate(9);

      return view('productos.listar')-> with ('productos', $productos);}


 public function agregar(){
     $marca = Marca::all();
     $modelos = Modelo::all();
return view ('productos.agregar')->with('modelos',$modelos) ->with('marcas',$marca);
}

public function guardar(Request $request){
  $reglas = [
    'titulo' => 'required',
    'marca_id' => 'required',
    'modelo_id' => 'required',
    'precio' => 'required|integer',
    'estado' => 'required',
    'km' => 'required|integer',
    'poster' => 'image'
   ];
   $errors = [
    'titulo.required' => 'Titulo requerido',
    'precio.required' => 'Indique un precio',
    'precio.integer' => 'ingrese un valor numerico',
    'km.required' => 'Indique el kilometraje del vehiculo',
    'km.integer' => 'Ingrese un valor numerico'
    ];
    $this->validate($request, $reglas, $errors);

    $ruta_image='';
    if($request->file('poster')){
      $ruta_image = $request->file('poster')->store('posters', 'public');
    }


    $producto= producto::create([
      'titulo' => $request->input('titulo'),
      'marca_id' => $request->input('marca_id'),
      'modelo_id' => $request->input('modelo_id'),
      'precio' => $request->input('precio'),
      'estado' => $request->input('estado'),
      'km' => $request->input('km'),
      'poster' => $ruta_image
    ]);
    return redirect('/');
}

public function editar($id){
$producto= producto::find($id);
return view('productos.editar') -> with('producto',$producto);
}

public function editarGuardar(request $request){
  $reglas = [
    'titulo' => 'required',
    'marca_id' => 'required',
    'modelo_id' => 'required',
    'precio' => 'required',
    'estado' => 'required',
    'poster' => 'image'
   ];
   $errors = [
    'titulo.required' => 'Titulo requerido',
    'precio.required' => 'Indique un precio',

    ];
    $this->validate($request, $reglas, $errors);

    $ruta_image='';
    if($request->file('poster')){
      $ruta_image = $request->file('posters')->storeAs('posters', 'public');
    }


    $producto= producto::fill([
      'titulo' => $request->input('titulo'),
      'marca_id' => $request->input('marca_id'),
      'modelo_id' => $request->input('modelo_id'),
      'precio' => $request->input('precio'),
      'estado' => $request->input('estado'),
      'poster' => $ruta_image
    ]);

    $producto->save();
}

public function mostrar(){
$marca= marca::all();
$modelo= modelo::all();

return view('productos.mostrar') ->with('marcas',$marca) ->with('modelo', $modelo);
}

public function mostrar1($id){
  $producto = producto::find($id);

  return view('productos.mostrar1')-> with ('producto', $producto);}

  public function perfil1($id){
    $usuario = usuario::find($id);

    return view('perfil1')-> with ('usuario', $usuario);}


}
