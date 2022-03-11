@extends('pages.layout.app')

@section('contents')
<div class="row justify-content-center">
  <div class="col-lg-12">
    <div class="card shadow">
      <div class="card-body">
        @img(['src' => $classphoto->image]) @endimg
      </div>
    </div>
  </div>
</div>

@endsection