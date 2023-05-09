@auth
<div class="d-flex justify-content-between">
  <form class="d-flex btn" method="GET" action="{{route('article.search')}}">
    <input class="btn form-control shadow me-1 bg-white" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
    <button class="btn text-bg-dark text-warning btn-outline-warning rounded shadow" type="submit">Cerca</button>
  </form>
  

  <a href="{{route('homepage')}}" class="btn d-flex">
    <button class="justify-content-start btn bi bi-house bg-dark text-warning shadow bg-outline-black"></button>
  </a>

  <ul class="btn nav dropdown d-flex">
    <li class="nav-item">
      <a class="btn text-bg-dark text-warning rounded shadow nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Benvenuto/a {{Auth::user()->name}}
      </a>
      <ul class="dropdown-menu shadow text-bg-dark" aria-labelledby="navbarDropdown" aria-labelledby="navbarDropdown">
        <li class="dropdown-item text-center text-warning" href="">Il tuo Profilo</li>
        @if (Auth::user()->is_admin)
        <li><a class="dropdown-item text-center text-warning" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
      @endif
      @if (Auth::user()->is_revisor)
        <li><a class="dropdown-item text-center text-warning" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
      @endif
      @if (Auth::user()->is_writer)
        <li><a class="dropdown-item text-center text-warning" href="{{route('writer.dashboard')}}">Dashboard del redattore</a></li>
      @endif
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item">
          <a class="dropdown-item text-center text-warning" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="dropdown-item text-center text-warning" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
     
        <li class="nav-item">
          @if(Auth::user()->is_writer)    
          <a class="dropdown-item text-center text-warning" href="{{route('article.create')}}">Inserisci un articolo</a>
          @else
          <a class="dropdown-item text-center text-warning" href="{{route('careers')}}">Inserisci un articolo</a>
          @endif
        </li>
        <li><hr class="dropdown-divider"></li>
        <li class="nav-item">
          <a class="dropdown-item text-center text-warning" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-center text-warning" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
          <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none p-1">
            @csrf
          </form>
      </ul>
    </li>
  </ul>
</div>
@endauth

@guest
<div class="d-flex justify-content-between">
  <form class="d-flex btn" method="GET" action="{{route('article.search')}}">
    <input class="btn form-control shadow me-1 bg-white" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
    <button class="btn text-bg-dark text-warning btn-outline-warning rounded shadow" type="submit">Cerca</button>
  </form>
  
  <a href="{{route('homepage')}}" class="btn d-flex">
    <button class="justify-content-start btn bi bi-house bg-dark text-warning shadow bg-outline-black"></button>
  </a>


  <ul class="btn nav dropdown d-flex">
    <li class="nav-item">
      <a class="text-bg-dark text-warning rounded shadow nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Benvenuto Utente Ospite
      </a>
      <ul class="dropdown-menu shadow text-bg-dark" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item text-center text-warning" href="{{route('login')}}">Accedi</a></li>
        <li><a class="dropdown-item text-center text-warning" href="{{route('register')}}">Registrati</a></li>
      </ul>
    </li>
  </ul>

</div>
@endguest