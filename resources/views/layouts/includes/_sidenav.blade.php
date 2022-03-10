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
                <a href="{{ route('yearlevel.index') }}" class="nav-link">Yearlevel</a>
                <a href="{{ route('course.index') }}" class="nav-link">Courses / Strands</a>
                <a href="{{ route('section.index') }}" class="nav-link">Section / Blocks</a>
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
                <a href="{{ route('student.index') }}" class="nav-link">Students</a>
                <a href="{{ route('faculty.index') }}" class="nav-link">Facultys</a>
              </nav>
          </div>
        
          <div class="sb-sidenav-menu-heading">Addons</div>
          <a href="{{ route('classphoto.index') }}" class="nav-link">
            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate fa-lg"></i></div>
            Class photo
        </a>

        <a href="{{ route('schoolevent.index') }}" class="nav-link">
            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate fa-lg"></i></div>
            School events
        </a>
         
      </div>
  </div>
  <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      CCTC Admin
  </div>
</nav>