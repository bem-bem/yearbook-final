@extends('pages.layout.app')

@section('contents')
      {{-- heading to all images --}}
      <div class="row justify-content-between">
        <div class="col-lg-3">
          <form action="{{ route('faculty_name') }}" method="get">
            @include('pages._search')
          </form>
        </div>
        <div class="heading-line"></div>
        <p class="text-center display-5 fw-bold">Class photos</p>
      </div>

      {{-- images --}}
      <div class="row">
        @forelse ($data as $item)
            <div class="col-lg-3 mb-4">
           <a href="{{ route('select_classphoto', [$item->id]) }}">
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