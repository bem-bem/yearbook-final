@extends('pages.layout.app')

@section('contents')
  <div class="card">
    <div class="row">
      <div class="col-lg-12">
        @cssWave() @endcssWave
      </div>
    </div>
    <div class="card-body">

        <div class="row">
          <div class="col-lg-4">
            @img(['src' => $faculty->image]) @endimg
          </div>
          <div class="col-lg-8 text-end">
            <h5 class="display-5">{{ $faculty->name }}</h5>
            <article class="px-3">
              <p>{{ $faculty->job }}</p>
              <p>{{ $faculty->job_description }}</p>
              <p>{{ $faculty->schoolyear }}</p>
            </article>
          </div>
        </div>

    </div>
  </div>
@endsection