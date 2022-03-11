@extends('layouts.app')

@section('title' , 'Facultys')
    
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
                        @include('facultys.forms._header')
                      </div>
                      {{-- i am still working on this --}}
                    
                      
                      <div class="card-body">
                        <div class="table-responsive">
                          <form action="{{ route('delete_faculty') }}" method="post">
                            @csrf
                            <table class="table table-borderless table-hover">
                              <caption>{{ $faculty->links() }}</caption>
                              <div class="mb-2">
                                @btnDelete() &nbsp; DELETE ALL SELECTED @endbtnDelete()
                              </div>
                              <thead class="table-primary">
                                <tr>
                                  <th scope="col">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="select-all">
                                      <label class="form-check-label" for="select-all">
                                        Select All
                                      </label>
                                    </div>
                                  </th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Job</th>
                                  <th scope="col">School year</th>
                                  <th scope="col">Update</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse ($faculty as $item)
                                    <tr>
                                      <td>
                                        <div>
                                          <input class="form-check-input" name="ids[]" type="checkbox" id="checkboxNoLabel" value="{{ $item->id }}">
                                        </div>
                                      </td>
                                      <td>{{ $item->name }}</td>
                                      <td>{{ $item->job }}</td>
                                      <td>{{ $item->schoolyear }}</td>
                                      <td>
                                        @btnUpdate(['href' => route('faculty.edit' , [$item->id])]) @endbtnUpdate
                                      </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                              </tbody>
                            </table>
                          </form>
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