@extends('layouts.app')

@section('title' , 'School Events')
    
@section('contents')
@include('layouts.includes._topnav')
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
     @include('layouts.includes._sidenav')
  </div>
  <div id="layoutSidenav_content">
      <main class="mt-5 mb-5">
          <div class="container-fluid px-4">
            {{-- category content  --}}
              <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="card shadow">
                      <div class="card-body">
                         <form action="{{ route('schoolevent.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          @include('schoolEvents.form._form')
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
          {{-- category content  --}}
          </div>
      </main>
    @include('layouts.includes._footer')
  </div>
</div>
@endsection