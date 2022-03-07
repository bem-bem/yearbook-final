@extends('layouts.app')

@section('title' , 'Update')
    
@section('contents')
@include('layouts.includes._topnav')
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
     @include('layouts.includes._sidenav')
  </div>
  <div id="layoutSidenav_content">
      <main class="mt-5 mb-5">
          <div class="container-fluid px-4">
            {{-- category content  --}}
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <h4 class="display-4">{{ $schoolevent->title }}</h4>
                    <p class="text-muted">{{ $schoolevent->created_at }}</p>
                      @forelse ($schoolevent->schoolEventImages as $item)
                          <div class="col-lg-3 mb-4">
                            <div class="card  shadow">
                              <div class="card-body"> 
                                @img(['src' => $item->image]) @endimg
                              </div>
                              <form action="{{ route('schooleventimages.update', [$item->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <input class="form-control form-control-sm" type="file" name="image">
                                </div>
                                <div class="card-footer text-center ">
                                  <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="submit" class="btn btn-outline-primary">update</button>
                                    </form>
                                    <form action="{{ route('schooleventimages.destroy', [$item->id]) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-outline-primary">delete</button>
                                    </form>
                                  </div>
                                </div>
                            </div>
                           
                          </div>
                      @empty
                          
                      @endforelse
                  </div>
                </div>
              </div>
            {{-- category content  --}}
          </div>
      </main>
    @include('layouts.includes._footer')
  </div>
</div>
@endsection