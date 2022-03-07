@extends('layouts.app')

@section('title' , 'classphotos')
    
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
                        <div class="row justify-content-between">
                          <div class="col-md-4">
                            @btnCreate(['href' => route('classphoto.create')]) @endbtnCreate()
                          </div>
                          <div class="col-md-4">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="Recipient's username">
                              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- i am still working on this --}}
                    
                      
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-borderless table-hover">
                            <caption>{{ $classphoto->links() }}</caption>
                            <thead class="table-primary">
                              <tr>
                                <th scope="col">Section / Block</th>
                                <th scope="col">Course / Strand</th>
                                <th scope="col">Yearlevel</th>
                                <th scope="col">School year</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($classphoto as $item)
                                  <tr>
                                    <td>{{ $item->section }}</td>
                                    <td>{{ $item->course }}</td>
                                    <td>{{ $item->yearlevel }}</td>
                                    <td>{{ $item->schoolyear }}</td>
                                    <td>
                                      @btnUpdate(['href' => route('classphoto.edit' , [$item->id])]) @endbtnUpdate
                                    </td>
                                    <td>
                                     <form action="{{ route('classphoto.destroy', [$item->id]) }}" method="post">
                                       @csrf
                                       @method('DELETE')
                                       @btnDelete() @endbtnDelete
                                     </form>
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