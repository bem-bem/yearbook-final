@extends('pages.layout.app')

@section('contents')
      {{-- heading to all images --}}
      <div class="row justify-content-between">
        <div class="col-lg-9">@include('pages.students._breadcrumb')</div>
        <div class="col-lg-3">@include('pages.students._search')</div>
        <div class="heading-line"></div>
        <p class="text-center display-5 fw-bold">Students</p>
      </div>

      {{-- images --}}
      <div class="row">
        @forelse ($data as $item)
            <div class="col-lg-3">
           <a href="{{ route('select_student', [$item->id]) }}">
            <div class="card shadow">
              <div class="card-body">
                @img(['src' => $item->image]) @endimg
                <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                <p class="text-muted">{{ $item->schoolyear }}</p>
              </div>
            </div>
           </a>
            </div>
        @empty
            
        @endforelse
      </div>

@endsection