@extends('pages.layout.app')

@section('title' , 'Home')
    
@section('contents')
<section class="bg-primary">
  <div class="container mt-5 pt-5 mb-5">
    <div class="row">
      <div class="col-lg-5">
        <article class="text-white text-uppercase fw-bold display-2 text-start">
          <p>consolatrix <br> college of <br> toledo city, inc.</p>
        </article>
        <p class="display-5 text-white text-capitalize" style="font-family: 'Alex Brush', cursive;"> Yearbook {{ date('Y') }}</p>
      </div>
      <div class="col-lg-7">
          <img src="{{ asset('image/welcome.svg') }}" alt="" class="img-fluid float-end">
      </div>
  </div>
  </div>
  @cssWave() @endcssWave
</section>
@endsection
