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
              <div class="card shadow">
                <div class="card-body">

                  {{-- heading button for delete the event --}}
                  <div class="row mb-5">
                    <div class="col-lg-12">
                      <form action="{{ route('schoolevent.destroy', [$schoolevent->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        @btnSubmit(['color' => 'danger']) DELETE THIS EVENT @endbtnSubmit
                      </form>
                    </div>
                  </div>

                  {{-- title and add new images --}}
                  <div class="row mb-4">
                    <div class="col-lg-8">
                     <form action="{{ route('schoolevent.update', [$schoolevent->id]) }}" method="post">
                       @csrf
                       @method('PUT')
                      <div class="mb-3">
                        <label for="title" class="form-label">Change event title here.</label>
                        <input type="text" name="title" value="{{ $schoolevent->title }}" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" id="title">
                        @if ($errors->has('title'))
                      <span class="invalid-feedback">{{ $errors->first('title') }}</span>
                      @endif
                      </div>
                      <button class="btn btn-sm btn-primary">submit</button>
                     </form>
                    </div>

                    <div class="col-lg-4">
                     <form action="{{ route('store_multiple', [$schoolevent->id]) }}" method="post" enctype="multipart/form-data">
                       @csrf
                       <div class="mb-3">
                        <label for="image" class="form-label">Add event image here.</label>
                        <input type="file" name="image[]" multiple value="{{ $schoolevent->image }}" class="form-control {{ $errors->has('image') ? 'is-invalid':'' }}" id="image">
                        @if ($errors->has('image'))
                      <span class="invalid-feedback">{{ $errors->first('image') }}</span>
                      @endif
                      </div>
                      <button class="btn btn-sm btn-primary">submit</button>
                     </form>
                    </div>
                  </div>

                  {{-- heading to all images --}}
                  <div class="row">
                    <div class="heading-line"></div>
                    <p class="text-center mb-5">{{ date('M/d/Y', strtotime($schoolevent->created_at)) }}</p>
                  </div>

                  {{-- images --}}
                  <div class="row">
                    @forelse ($schoolevent->schoolEventImages as $item)
                      <div class="col-md-4 mb-4">
                        <div class="card shadow">
                          <div class="card-body">
                            @img(['src' => $item->image]) @endimg()
                            <p class="card-text">
                             <form action="{{ route('schooleventimages.update', [$item->id]) }}" method="post" enctype="multipart/form-data">
                               @csrf
                               @method('PUT')
                              <div class="input-group mb-3">
                                <input type="file" name="image" class="form-control" required>
                                <button class="btn btn-outline-secondary" type="submit">upload</button>
                              
                              </div>
                             </form>
                            </p>
                          </div>
                          <div class="card-footer">
                            <form action="{{ route('schooleventimages.destroy', [$item->id]) }}" method="post">
                              @csrf
                              @method('DELETE')
                              @btnSubmit(['color' => 'danger']) DELETE @endbtnSubmit
                            </form>
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
