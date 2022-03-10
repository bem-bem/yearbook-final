@extends('layouts.app')

@section('title' , 'Students')
    
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

                      {{-- search --}}
                      <div class="card-body">
                          @include('students.form._header')
                      </div>
                      {{-- search --}}
                    
                      
                      <div class="card-body">
                        <div class="table-responsive">
                        <form action="{{ route('delete_student') }}" method="post">
                          @csrf
                          <table class="table table-borderless table-hover">
                            <caption>{{ $student->links() }}</caption>
                            <button type="submit" class="btn btn-danger mb-2">Delete selected item</button>
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
                                <th scope="col">Yearlevel</th>
                                <th scope="col">School year</th>
                                <th scope="col">Update</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($student as $item)
                                  <tr>
                                    <td>
                                      <div>
                                        <input class="form-check-input" name="ids[]" type="checkbox" id="checkboxNoLabel" value="{{ $item->id }}">
                                      </div>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->yearlevel }}</td>
                                    <td>{{ $item->schoolyear }}</td>
                                    <td>
                                      @btnUpdate(['href' => route('student.edit' , [$item->id])]) @endbtnUpdate
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