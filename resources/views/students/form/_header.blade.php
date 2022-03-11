<div class="row justify-content-between">
  <div class="col-md-6 mb-4">
    <h4 class="fs-5 fw-bold"> @btnCreate(['href' => route('student.create')]) @endbtnCreate() Students Table</h4>
  </div>
  <div class="col-md-4 mb-4">
    <form action="{{ route('student.index') }}" method="get">
    <div class="input-group">
        <input type="search" name="name" class="form-control" placeholder="Search name.." required>
        @btnSearch() @endbtnSearch
    </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    @include('students.form._filter')
  </div>
</div>