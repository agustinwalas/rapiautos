@extends('plantillas.primer')
@section('contenido')
  <div class="vender">
    <form method="get" action="productos/agregar">
    <button type="submit" class="btn btn-success">Vende ahora Gratis!!</button>
    </form>
  </div>
  <a  href="/productos/mostrar1/{{$producto->id}}"></a>
<div class="autos">

      <div class="auto">
        <div class="imagen">
          <img src="/storage/{{$producto->poster}}">
        </div>
        <h3>{{$producto->titulo}}</h3>
        <ul class="datos-secundarios">
          <li> {{$producto->precio}}$ </li>
          <li>{{$producto->estado}}</li>
          <li>{{$producto->km}}km</li>
        </ul>
      </div>
<p style="margin-top:20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<button type="submit" class="btn btn-success">Compralo Ahora!!</button>
<button style="margin-left:15px;"type="submit" class="btn btn-success">Contactar vendedor</button>
<img src="diseño/mercadopago.png" alt="">
@endsection
