<nav class="navbar navbar-expand-lg nb-admin fixed-top">
    <div class="container-fluid">
      <a href="#" class="navbar-brand" data-bs-target="#sidebar" data-bs-toggle="collapse">
          <i class="navbar-toggler-icon"></i>
      </a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li class="text-center">
                <a href="{{url('/')}}" target="_blank" class="text-success text-decoration-none text-truncate"><span><b>View Site</b></span></a>
              </li>
              <hr>
              <li class="text-center">
                <form action="{{url('/logout')}}" method="post">
                  @csrf
                  <button class="btn text-danger" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>