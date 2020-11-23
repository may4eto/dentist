<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
        @if (basename($_SERVER['PHP_SELF'])=='index')
        <img src="/images/logo.svg" alt="logo" width= "48px">
        @else ()
        <img src="/images/logo_white.svg" alt="logo" width= "48px">
        @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars text-primary"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          @if (basename($_SERVER['PHP_SELF'])=='index')
          <a class="nav-link text-primary" href="{{route('home')}}">Home</a>
          @else ()
          <a class="nav-link text-white" href="{{route('home')}}">Home</a>
          @endif 
        </li>
        <li class="nav-item">
          @if (basename($_SERVER['PHP_SELF'])=='index')
          <a class="nav-link text-primary" href="{{route('servizi')}}">Servizi</a>
          @else ()
          <a class="nav-link text-white" href="{{route('servizi')}}">Servizi</a>
          @endif 
        </li>
        <li class="nav-item">
          @if (basename($_SERVER['PHP_SELF'])=='index')
          <a class="nav-link text-primary" href="{{route('team')}}">Team</a>
          @else ()
          <a class="nav-link text-white" href="{{route('team')}}">Team</a>
          @endif 
        </li>
        <li class="nav-item">
          @if (basename($_SERVER['PHP_SELF'])=='index')
          <a class="nav-link text-primary" href="{{route('contatti')}}">Contatti</a>
          @else ()
          <a class="nav-link text-white" href="{{route('contatti')}}">Contatti</a>
          @endif 
          </li>
        </ul>
        @if (basename($_SERVER['PHP_SELF'])=='index')
        <a href="{{route('contatti')}}" class="btn btn-outline-primary my-2 my-sm-0">Prenota visita</a>
        @else ()
        <a href="{{route('contatti')}}" class="btn btn-outline-light my-2 my-sm-0">Prenota visita</a>
        @endif
    </div>
  </div>
</nav>