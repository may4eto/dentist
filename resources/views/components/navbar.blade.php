<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
        @if (basename($_SERVER['PHP_SELF'])=='index')
        <img id="logo"src="/images/logo.svg" alt="logo" width= "48px">
        @else ()
        <img id="logo" src="/images/logo_white.svg" alt="logo" width= "48px">
        @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars {{Route::current()->getName() =='home' ? 'text-primary' : 'text-white'}}"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link {{Route::current()->getName() =='home' ? 'text-primary' : 'text-white'}}" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::current()->getName() =='home' ? 'text-primary' : 'text-white'}}" href="{{route('servizi')}}">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::current()->getName() =='home' ? 'text-primary' : 'text-white'}}" href="{{route('team')}}">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Route::current()->getName() =='home' ? 'text-primary' : 'text-white'}}" href="{{route('contatti')}}">Contatti</a>
        </li>
        </ul>
        <a href="{{route('contatti')}}" class="navbar-button btn {{Route::current()->getName() =='home' ? 'btn-outline-primary' : 'btn-outline-light'}} my-2 my-sm-0">Prenota visita</a>
    </div>
  </div>
</nav>