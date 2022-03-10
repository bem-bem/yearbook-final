@extends('layouts.app')

@section('title' , 'schoolevents')
    
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
                  <div class="col-lg-12">
                    <div class="card shadow">

                      {{-- i am still working on this --}}
                      <div class="card-body">
                      @include('schoolEvents.form._header')
                      </div>
                      {{-- i am still working on this --}}
                    
                      
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-borderless table-hover">
                            <caption>{{ $schoolevent->links() }}</caption>
                            <thead class="table-primary">
                              <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Update</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($schoolevent as $item)
                                  <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{  date('M/d/Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                      @btnUpdate(['href' => route('schoolevent.edit' , [$item->id])]) @endbtnUpdate
                                    </td>
                                  </tr>
                              @empty
                                  
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