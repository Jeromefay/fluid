<div class="row justify-content-center">
  <p class="text-success font-weight-bold font-italic">Rejoins le collectif Fluid !</p>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('/quiestfluid')}}">Qui est FLuid ?</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('/membre')}}">Réseautez avec nous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('/shop')}}">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase" href="{{url('/contact')}}">Contact</a>
      </li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right nav-pills">
    @if(Auth::check())
      <a class="nav-link font-weight-bold text-uppercase" href="{{route('index')}}">TABLEAU DE BORD</a>
      <a class="nav-link font-weight-bold text-uppercase" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        SE DECONNECTER
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
      @else
      <a class="nav-link font-weight-bold text-uppercase" href="{{route('login')}}"><i class="fas fa-user"></i></a>
      @endif       
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


