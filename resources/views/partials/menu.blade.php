<div id="ancre" class="rejoinsLeCollectif">
  <a target="_blank" href="{{url('/register')}}" class="textRejoinsLeCollectif">Rejoins le collectif Fluid !</a>
</div>

<nav class="navbar navbar-expand-lg navbar-white bg-white sticky-top">
  <a class="navbar-brand" href="{{url('/')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase menuHeader {{ Request::is('quiestfluid') ? 'active' : 'colorHeader' }}" href="{{url('/quiestfluid')}}">Qui est FLuid ?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-uppercase colorHeader" href="#" id="navbarDropdownMenuLink modifAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bougez avec nous
        </a>
        <div class="dropdown-menu font-weight-bold text-uppercase" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold text-uppercase {{ Request::is('expo') ? 'active' : '' }}" href="{{url('/expo')}}">Expos</a>
          <a class="dropdown-item font-weight-bold text-uppercase {{ Request::is('workshop') ? 'active' : '' }}" href="{{url('/workshop')}}">Workshop</a>
          <a class="dropdown-item font-weight-bold text-uppercase {{ Request::is('excursion') ? 'active' : '' }}" href="{{url('/excursion')}}">Excursions</a>
          <a class="dropdown-item font-weight-bold text-uppercase {{ Request::is('soiree') ? 'active' : '' }}" href="{{url('/soiree')}}">Event</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase beforeReseautez menuHeader {{ Request::is('espace/membre') ? 'active' : 'colorHeader' }}" href="{{url('espace/membre')}}">Réseautez avec nous</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase menuHeader {{ Request::is('shop') ? 'active' : 'colorHeader' }}" href="{{url('/shop')}}">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold text-uppercase {{ Request::is('contact') ? 'active' : 'colorHeader' }}" href="{{url('/contact')}}">Contact</a>
      </li>
      <li class="nav-item">
        <a target="_blank" href="https://insta-stalker.com/profile/fluid_flot_graphique/%22%3E"><img src="{{asset('front/logoInstagram.png')}}"> </a>
      </li>
      <li class="nav-item logoFaceBook">
        <a targer="_blank" href="https://www.facebook.com/groups/1797643553621438/%22%3E"><img src="{{asset('front/logoFaceBook.jpg')}}"> </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right nav-pills">

    <!-- menu login -->
    @if(Auth::check())
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i>
        </a>
        <div id="dropdownMenuUser" class="dropdown-menu font-weight-bold text-uppercase" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{ route('membre.edit', $user->id) }}">Modifier mon profil</a>
          <a class="dropdown-item font-weight-bold text-uppercase" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SE DECONNECTER</a>
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


