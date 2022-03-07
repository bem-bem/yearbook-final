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
            
          </div>
      </main>
    @include('layouts.includes._footer')
  </div>
</div>
@endsection