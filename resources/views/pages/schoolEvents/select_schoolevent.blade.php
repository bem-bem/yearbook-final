@extends('pages.layout.app')

@section('title' , $schoolevent->title)

@section('contents')
{{-- heading title --}}
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h5 class="display-6 fw-bold text-center text-uppercase">{{ $schoolevent->title }}</h5>
      </div>
      <div class="heading-line"></div>
        <p class="mb-3 text-center">{{ date('M/d/Y', strtotime($schoolevent->event_date)) }}</p>
    </div>

    {{-- images --}}
    <div class="row">
      @forelse ($schoolevent->schoolEventImages as $item)
      <div class="col-lg-6 mb-3">
        <div class="card shadow">
          @img(['src' => $item->image]) @endimg
         
            <div class="card-img-overlay">
              <h5 class="card-title">
                <a href="{{ empty($item->image) ? '#' : route('schoolevent_img' , [$item->id])  }}" class="btn btn-outline-light"><i class="fa-solid fa-download"></i></a>
              </h5>
            </div>

        </div>
      </div>
      @empty
          
      @endforelse
    </div>

@endsection