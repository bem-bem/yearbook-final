@extends('layouts.app')

@section('title' , 'Facultys')
    
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
                    <form action="{{ route('yearlevel.update' , [$yearlevel->id]) }}" method="post">
                      @csrf
                      @method('PUT')
                      @include('category.yearlevel._form')
                    @btnSubmit() update form @endbtnSubmit
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