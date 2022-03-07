
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
  <!-- Navbar Brand-->
  <span class="navbar-brand ps-3 text-uppercase">yearbook panel</span>
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
                <span style="cursor: pointer"  data-bs-toggle="modal" data-bs-target="#logout" class="dropdown-item" >Logout</span>
              </li>
          </ul>
      </li>
  </ul>
</nav>


<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      
      <div class="modal-body text-center">
        <form action="{{ route('logout_admin') }}" method="post">
          @csrf
          @btnSubmit() @endbtnSubmit
        </form>
      </div>
     
    </div>
  </div>
</div>