@extends('plantillas.primer')
@section('contenido')
  <div class="vender">
    <a href="productos/agregar">Vende ahora Gratis!!  </a>
  </div>
<div class="autos">
    @foreach ($productos as $producto)
      <div class="auto">
        <div class="imagen">
          <img src="">
        </div>
        <h3>{{$producto->titulo}}</h3>
        <ul class="datos-secundarios">
          <li> {{$producto->precio}}$ </li>
          <li>{{$producto->estado}}</li>
          <li>{{$producto->km}}km</li>
        </ul>
      </div>

    @endforeach
</div>
@endsection
