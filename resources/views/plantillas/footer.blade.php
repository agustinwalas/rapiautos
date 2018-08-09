<footer style="margin-top:30px;"class="final">
@guest
@else
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-info" name="button">Cerrar sesion</button>
  </form>
@endguest




</footer>
