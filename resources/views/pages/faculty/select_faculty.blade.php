@extends('pages.layout.app')

@section('title' , $faculty->name)

@section('contents')
  <div class="row">
    <div class="col-lg-12">
      <div class="card shadow mb-3">
        <div class="row g-0">
          <div class="col-md-4 {{ empty($faculty->image) ? 'mt-4' : '' }}">
            @img(['src' => $faculty->image]) @endimg
            <div class="card-img-overlay">
              <h5 class="card-title">
                <a href="{{ empty($faculty->image) ? '#' : route('faculty_img' , [$faculty->id])  }}" class="btn btn-outline-light"><i class="fa-solid fa-download"></i></a>
              </h5>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body text-capitalize">
              <h5 class="card-title fw-bolder display-5">{{ $faculty->name }}</h5>
              <p class="card-text">{{ $faculty->job }}</p>
                <div class="row">
                  <div class="col">
                    <article>
                      <h5 class="fs-5 fw-bold">Job description</h5>
                      <p>{{ $faculty->job_description }}</p>
                    </article>
                  </div>
                </div>
              <p class="card-text"><small class="text-muted">{{ $faculty->schoolyear }}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection