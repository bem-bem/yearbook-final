@extends('layouts.app')

@section('title' , 'Course')
    
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
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="card shadow">

                      {{-- i am still working on this --}}
                      <div class="card-body">
                        <div class="row justify-content-between">
                          <div class="col-lg-6">
                            <h4 class="fs-5 fw-bold"> @btnCreate(['href' => route('course.create')]) @endbtnCreate Courses / Strands Table</h4>
                          </div>
                        </div>
                      </div>
                      {{-- i am still working on this --}}
                    
                      
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-borderless table-hover text-capitalize">
                            <caption>{{ $data->links() }}</caption>
                            <thead class="table-primary">
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($data as $item)
                                  <tr @if ($loop->first) class="bg-secondary fw-bolder shadow text-dark" @endif>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                      @btnUpdate(['href' => route('course.edit' , [$item->id])]) @endbtnUpdate
                                    </td>
                                    <td>
                                     <form action="{{ route('course.destroy', [$item->id]) }}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       @btnDelete() @endbtnDelete
                                     </form>
                                    </td>
                                  </tr>
                              @empty
                              @include('_noRecord')
                              @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
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