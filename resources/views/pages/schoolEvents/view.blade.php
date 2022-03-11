@extends('pages.layout.app')

@section('contents')
      {{-- heading to all images --}}
      <div class="row justify-content-end">
        <div class="col-lg-4">
          <form action="{{ route('schoolevents') }}" method="get">
            <div class="input-group mb-3">
              <input type="search" name="title" class="form-control" placeholder="Search title..." required>
              @btnSearch() @endbtnSearch
            </div>
          </form>
        </div>
        <div class="heading-line"></div>
        <p class="text-center display-5 fw-bold">School events</p>
      </div>

      {{-- images --}}
      <div class="row">
        @forelse ($data as $item)
          <div class="col-lg-3 mb-3">
          <a class="text-decoration-none" href="{{ route('select_schoolevent' , [$item->id]) }}">
            <div class="card shadow text-dark">
              <div class="card-body">
                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                <p class="text-muted">{{ date('M/d/Y', strtotime($item->event_date)) }}</p>
              </div>
            </div>
           </a>
        </div>
        @empty
            
        @endforelse
      </div>

<div class="row justify-content-center mt-5">
  <div class="col-lg-12 text-center">
    {{ $data->links() }}
  </div>
</div>

@endsection