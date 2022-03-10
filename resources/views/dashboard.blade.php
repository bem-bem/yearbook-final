@extends('layouts.app')

@section('title' , 'Dashboard')
    
@section('contents')
@include('layouts.includes._topnav')
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
     @include('layouts.includes._sidenav')
  </div>
  <div id="layoutSidenav_content">
      <main class="mt-5 mb-5">
          <div class="container-fluid px-4">
            {{-- web content --}}
            <div class="row mb-4">

              <div class="col-md-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Category</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Yearlevel <span class="badge bg-secondary">{{ $yearlevel }}</span>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Category</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Courses / strands <span class="badge bg-secondary">{{ $course }}</span>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Category</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Sections / Blocks <span class="badge bg-secondary">{{ $section }}</span>
                    </h5>
                  </div>
                </div>
              </div>

            </div>

            <div class="row mb-4">

              <div class="col-md-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Album</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Students <span class="badge bg-secondary">{{ $student }}</span>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Album</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Facultys <span class="badge bg-secondary">{{ $faculty }}</span>
                    </h5>
                  </div>
                </div>
              </div>

            </div>

            <div class="row mb-4">

              <div class="col-md-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Addons</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      Class photos <span class="badge bg-secondary">{{ $classphoto }}</span>
                    </h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card shadow">
                  <div class="card-header bg-primary text-white fw-bold">Addons</div>
                  <div class="card-body">
                    <h5 class="card-title fw-bold">
                      School events <span class="badge bg-secondary">{{ $schoolevent }}</span>
                    </h5>
                  </div>
                </div>
              </div>

            </div>
            {{-- web content --}}
          </div>
      </main>
    @include('layouts.includes._footer')
  </div>
</div>
@endsection