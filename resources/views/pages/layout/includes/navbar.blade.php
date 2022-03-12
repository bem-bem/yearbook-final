<nav class="navbar navbar-dark bg-primary fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('image/cctc_logo.png') }}" width="40">&nbsp;Web-based yearbook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-primary">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Yearbook
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="{{ route('students') }}">Students</a></li>
              <li><a class="dropdown-item" href="{{ route('facultys') }}">Facultys</a></li>
              <li><a class="dropdown-item" href="{{ route('classphotos') }}">Class photo</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{ route('schoolevents') }}">School events</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>