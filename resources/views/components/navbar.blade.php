<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="/images/logo.svg" alt="logo" width= "48px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fas fa-bars text-primary"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        <a class="nav-link text-primary" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="{{route('servizi')}}">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="{{route('team')}}">Team</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary" href="{{route('contatti')}}">Contatti</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="{{route('contatti')}}">
            <button class="btn btn-outline-primary my-2 my-sm-0">Prenota visita</button>
        </a>
      </form>
    </div>
  </div>
</nav>