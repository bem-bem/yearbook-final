@extends('pages.layout.app')

@section('title' , $student->name)

@section('contents')
<div class="container mt-5 pt-5 mb-5">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card shadow mb-3">
        <div class="row g-0">
          <div class="col-md-4 {{ empty($student->image) ? 'mt-5' : '' }}">
            @img(['src' => $student->image]) @endimg
            <div class="card-img-overlay">
              <h5 class="card-title">
                <a href="{{ empty($student->image) ? '#' : route('student_img' , [$student->id])  }}" class="btn btn-outline-light"><i class="fa-solid fa-download"></i></a>
              </h5>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body text-capitalize">
              <h5 class="card-title fw-bolder display-5">{{ $student->name }}</h5>
              <small class="text-muted">{{ date('M/d/Y', strtotime($student->birthday)) }}</small>
              <p class="card-text">{{ $student->yearlevel }} : {{ $student->course }} {{ $student->section }} <br> {{ $student->awards }} </p>
                <div class="row justify-content-between">
                  <div class="col">
                    <article>
                      <h5 class="fs-5 fw-bold">Goal</h5>
                      <p>{{ $student->goal }}</p>
                    </article>
                  </div>
                  <div class="col">
                    <article>
                      <h5 class="fs-5 fw-bold">Motto</h5>
                      <p>{{ $student->motto }}</p>
                    </article>
                  </div>
                </div>
              <p class="card-text"><small class="text-muted">{{ $student->schoolyear }}</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection