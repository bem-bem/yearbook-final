@extends('pages.layout.app')

@section('title' , 'Student')

@section('contents')
   <div class="container mt-5 pt-5 mb-5">
        {{-- heading to all images --}}
        <div class="row justify-content-between">
          <div class="col-lg-8">@include('pages.students._filter')</div>
          <div class="col-lg-4">
            <form action="{{ route('students') }}" method="get">
              @include('pages._search')
            </form>
          </div>
          <div class="heading-line"></div>
          <p class="text-center display-5 fw-bold">Students</p>
        </div>
  
        {{-- images --}}
        <div class="row">
          @forelse ($data as $item)
            <div class="col-lg-3 mb-3">
             <a class="text-decoration-none" href="{{ route('select_student', [$item->id]) }}">
              <div class="card shadow text-dark">
                <div class="card-body">
                  @img(['src' => $item->image]) @endimg
                  <h5 class="card-title fw-bold text-capitalize mt-2 text-center">{{ $item->name }}</h5>
                </div>
                <div class="card-footer text-muted text-end">
                  {{ $item->schoolyear }}
                </div>
              </div>
             </a>
          </div>
          @empty
              @include('_noRecord')
          @endforelse
        </div>
  
  <div class="row justify-content-center mt-5">
    <div class="col-lg-12 text-center">
      {{ $data->links() }}
    </div>
  </div>
   </div>

@endsection