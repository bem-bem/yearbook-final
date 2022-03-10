@extends('pages.layout.app')

@section('contents')
      {{-- heading to all images --}}
      <div class="row justify-content-end">
        <div class="col-lg-4">
          @include('pages.classPhoto._filter')
        </div>
        <div class="heading-line"></div>
        <p class="text-center display-5 fw-bold">Class photos</p>
      </div>

      {{-- images --}}
      <div class="row">
        @forelse ($data as $item)
            <div class="col-lg-3 mb-4">
           <a class="text-decoration-none" href="{{ route('select_classphoto', [$item->id]) }}">
            <div class="card shadow ">
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

  <div class="row justify-content-center mt-5">
    <div class="col-lg-12 text-center">
      {{ $data->links() }}
    </div>
  </div>

@endsection