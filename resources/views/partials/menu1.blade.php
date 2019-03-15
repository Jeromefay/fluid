<div class="row justify-content-center">
  <p class="text-success font-weight-bold font-italic">Rejoins le collectif Fluid !</p>
</div>

<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <a class="navbar-brand" href="{{url('/')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item {{ Request::segment(1)=='quiestfluid' ? 'active' : '' }}">
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('/quiestfluid')}}">Qui est FLuid ?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bougez avec nous
        </a>
        <div class="dropdown-menu font-weight-bold text-uppercase" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{url('/expo')}}">Expos</a>
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{url('/workshop')}}">Workshop</a>
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{url('/excursion')}}">Excursions</a>
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{url('/soiree')}}">Event</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('espace/membre')}}">Réseautez avec nous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase {{ Request::segment(1)=='shop' ? 'active' : '' }}"
          href="{{url('/shop')}}">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase {{ Request::is('contact') ? 'active' : '' }}"
          href="{{url('/contact')}}">Contact</a>
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right nav-pills">

      <!-- test -->
      @if(Auth::check())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu font-weight-bold text-uppercase" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{ route('membre.edit', $user->id) }}">Modifier
            mon profil</a>
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SE DECONNECTER</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
      @else
      <a class="nav-link font-weight-bold text-uppercase" href="{{route('login')}}"><i class="fas fa-user"></i></a>
      @endif
      <!-- fin -->

      <div class="cntr">
        <div class="cntr-innr">
          <label class="search" for="inpt_search">
            <input id="inpt_search" type="text" />
          </label>
        </div>
      </div>
    </ul>
  </div>
</nav>