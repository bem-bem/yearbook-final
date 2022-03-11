@extends('layouts.app')

@section('title' , 'Update Course')
    
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
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="card shadow">
                  <div class="card-body">
                    <form action="{{ route('course.update' , [$course->id]) }}" method="post">
                      @csrf
                      @method('PUT')
                      @include('category.course._form')
                     <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                    </form>
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