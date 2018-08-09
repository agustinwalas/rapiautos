@extends('plantillas.primer')
@section('contenido')

  <a  href="/usuarios/perfil1/{{$usuario->id}}"></a >
<div class="autos">

      <div class="auto">
        <div class="imagen">
          <img src="/storage/{{$usuario->avatars}}">
        </div>
        <h3>{{$usuario->name}}</h3>
        <ul class="datos-secundarios">
          <li> {{$usuario->email}}$ </li>
        </ul>
      </div>
@endsection
