@extends('plantillas.primer')
@section('contenido')
  <div class="vender">
    <form method="get" action="productos/agregar">
    <button type="submit" class="btn btn-success">Vende ahora Gratis!!</button>
    </form>
  </div>
<div class="autos">
    @foreach ($productos as $producto)
      <div class="auto">
        <div class="imagen">
          <img src="/storage/{{$producto->poster}}">
        </div>
        <a href="/productos/mostrar1/{{$producto->id}}">{{$producto->titulo}}</a>
        <ul class="datos-secundarios">
          <li> {{$producto->precio}}$ </li>
          <li>{{$producto->estado}}</li>
          <li>{{$producto->km}}km</li>
        </ul>
      </div>

    @endforeach
</div>
{{$productos->links()}}

@endsection
