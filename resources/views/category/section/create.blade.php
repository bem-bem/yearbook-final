@extends('layouts.app')

@section('title' , 'Section / Block')
    
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
                    <form action="{{ route('section.store') }}" method="post">
                      @csrf
                      @include('category.section._form')
                      <button type="submit" class="btn btn-primary w-100">Submit Form</button>
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