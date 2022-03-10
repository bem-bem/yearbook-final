@extends('pages.layout.app')

@section('contents')
{{-- heading title --}}
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h5 class="display-6 fw-bold text-center">{{ $schoolevent->title }}</h5>
      </div>
      <div class="heading-line"></div>
    </div>

    {{-- images --}}
    <div class="row">
      @forelse ($schoolevent->schoolEventImages as $item)
      <s class="col-lg-6">
        <div class="card shadow">
          <div class="card-body">
            @img(['src' => $item->image]) @endimg
          </div>
        </div>
      </s>
      @empty
          
      @endforelse
    </div>
@endsection