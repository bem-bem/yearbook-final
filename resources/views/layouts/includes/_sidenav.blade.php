<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu">
      <div class="nav">

          <div class="sb-sidenav-menu-heading">heading</div>
          <a class="nav-link" href="{{ route('dashboard') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-lg"></i></div>
              Dashboard
          </a>

          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="false" aria-controls="category">
              <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list fa-lg"></i></div>
              Category 
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav fs-6">
                @links(['href' => route('yearlevel.index')]) yearlevel @endlinks
                @links(['href' => route('course.index')]) course @endlinks
                @links(['href' => route('section.index')]) section @endlinks
              </nav>
          </div>

          <div class="sb-sidenav-menu-heading">students / facultys</div>
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#album" aria-expanded="false" aria-controls="album">
              <div class="sb-nav-link-icon"><i class="fas fa-images fa-lg"></i></div>
              Album
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="album" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav fs-6">
                @links(['href' => route('student.index')]) students @endlinks
                @links(['href' => route('faculty.index')]) facultys @endlinks
              </nav>
          </div>
        
          <div class="sb-sidenav-menu-heading">Addons</div>
          @links(['href' => route('classphoto.index')]) 
          <div class="sb-nav-link-icon"><i class="fas fa-user-graduate fa-lg"></i></div>
          Class photo
          @endlinks

          @links(['href' => route('schoolevent.index')]) 
          <div class="sb-nav-link-icon"><i class="fas fa-calendar-check fa-lg"></i></div>
          School events 
          @endlinks
         
      </div>
  </div>
  <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      CCTC Admin
  </div>
</nav>