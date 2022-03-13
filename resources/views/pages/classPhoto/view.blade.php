@extends('pages.layout.app')

@section('title' , 'Class photo')

@section('contents')
      {{-- heading to all images --}}
      <div class="row justify-content-end">
        <div class="col-lg-5">
          @include('pages.classPhoto._filter')
        </div>
        <div class="heading-line"></div>
        <p class="text-center display-5 fw-bold">Class photos</p>
      </div>

      {{-- images --}}
      <div class="row">
        @forelse ($data as $item)
          <div class="col-lg-6 mb-3">
           <a class="text-decoration-none" href="{{  empty($item->image) ? '#' :  asset('storage/' . $item->image) }}">
            <div class="card shadow">
              <div class="mt-3">
                @img(['src' => $item->image]) @endimg
              </div>
              <div class="card-body text-center text-dark">
                <h5 class="card-title fw-bold"> {{ $item->schoolyear }}</h5>
              </div>
            </a>
              <div class="card-footer text-muted ">
                <a href="{{ route('classphoto_img' , [$item->id]) }}" class="float-end btn btn-dark"><i class="fa-solid fa-download"></i></a>
              </div>
            </div>
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

@endsection