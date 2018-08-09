@extends('plantillas.primer')

@section('contenido')
  <link rel="stylesheet" href="/css/agregar.css">
 <h1>Venda Su auto ya!!</h1>



 <form class="agregar" action="/productos/guardar" method="post" enctype='multipart/form-data'>

   {{ csrf_field() }}
<div class="form-group {{ $errors->has('titulo')?'has-error':'' }}">
   <label for="titulo">Título</label>
   <input name="titulo" value="{{ old('titulo') }}" class="form-control" type="text" placeholder="Ingrese el título">
   @if($errors->has('titulo'))
     <span class="text-danger">{{ $errors->first('titulo') }}</span>
   @endif
</div>
<div class="form-group {{ $errors->has('precio')?'has-error':'' }}">
   <label for="titulo">Precio</label>
   <input name="precio" value="{{ old('precio') }}" class="form-control" type="text" placeholder="Ingrese el precio">
   @if($errors->has('precio'))
     <span class="text-danger">{{ $errors->first('precio') }}</span>
   @endif
</div>

  <label class="form-group">marca:</label>
  <select class="" name="marca_id">
  @foreach ($marcas as $marca )
    <option value="{{$marca->id}}">{{$marca->marca}}</option>
  @endforeach
</select>

<label class="form-group">modelo:</label>
<select class="" name="modelo_id">
@foreach ($modelos as $modelo )
  <option value="{{$modelo->id}}">{{$modelo->modelo}}</option>
@endforeach
</select>

<div>
  <label class="form-group">Estado:</label>
  <select class="" name="estado">
    <option value="nuevo">Nuevo</option>
    <option value="usado">Usado</option>
  </select>
  @if($errors->has('estado'))
    <span class="text-danger">{{ $errors->first('estado') }}</span>
  @endif
</div>

<div class="form-group {{ $errors->has('poster')?'has-error':'' }}">
   <label for="poster">Carga tu imagen</label>
   <input name="poster" type="file" class="form-control">
   @if($errors->has('auto'))
     <span class="text-danger">{{ $errors->first('auto') }}</span>
   @endif
</div>

   <button type="submit" class="btn btn-primary">Publicar Producto</button>
   </form>



@endsection
