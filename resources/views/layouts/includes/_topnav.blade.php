
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
  <!-- Navbar Brand-->
  <span class="navbar-brand ps-3 text-uppercase" style="font-family: cursive;">yearbook panel</span>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

  <!-- Navbar-->
  <ul class="navbar-nav ms-auto  me-3 me-lg-4">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user fa-fw"></i> 
            </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <form action="{{ route('logout_admin') }}" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
          </ul>
      </li>
  </ul>
</nav>