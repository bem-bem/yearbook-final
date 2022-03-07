@extends('pages.layout.app')

@section('title' , 'Login')
    
@section('contents')
<div class="row">
  <div class="col-md-6 offset-md-3">
    <div class="card shadow">

      <form action="{{ route('login_check') }}" method="post" class="card-body cardbody-color p-lg-5">
          @csrf
        <div class="text-center">
          <img src="{{ asset('image/cctc_logo.png') }}" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
            width="200px" alt="profile">
        </div>

        <div class="mb-3">
          <input type="text" name="username" value="{{ old('username') }}" class="form-control {{ $errors->has('username') ? 'is-invalid':'' }}" placeholder="User Name">
          @if ($errors->has('username'))
          <span class="invalid-feedback">{{ $errors->first('username') }}</span>
          @endif
        </div>
        <div class="mb-3">
          <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}" placeholder="password">
          @if ($errors->has('password'))
          <span class="invalid-feedback">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <div class="text-center">
          @btnSubmit() Login @endbtnSubmit
        </div>
      </form>
    </div>

  </div>
</div>
@endsection