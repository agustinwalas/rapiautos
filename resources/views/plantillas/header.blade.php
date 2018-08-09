<header>
  <div class="nav-bar">
     <div class="logo">
       <a href="/"><img src="/diseño/logo.png"></a>
     </div>
     <div class="logoM">
       <a href="/"><img src="/diseño/logo-mini.png"></a>
     </div>
     <div class="searchbar">
   <input class="barra"type="text" placeholder="     buscar..">
   <img src="diseño/zoom1.png" alt="">
 </div>
     <div class="nav-items">
        @guest
          <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Sesion</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="register">Registrarse</a>
            <a class="dropdown-item" href="login">Logearse</a>
        </div>
    </li>

    </ul>
        @else
          <ul class="navbar-nav ml-auto">
            <img class="perfil" src="{{ \Storage::url(\Auth::user()->avatar) }} " alt="">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle hola" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"> Cerrar sesion </a>
            <a class="dropdown-item" href="faq">Preguntas Frecuentes</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <button type="submit" name="button">Cerrar sesion</button>
            </form>
        </div>
    </li>

    </ul>
@endguest



<div class="noche">
  <label class="switch">
    <input type="checkbox">
    <span id="temanoche" class="slider round"></span>
  </label>
  </div>
</header>
