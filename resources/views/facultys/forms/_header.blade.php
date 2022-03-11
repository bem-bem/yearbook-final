<div class="row justify-content-between">
  <div class="col-md-4 mb-3">
    <h4 class="fs-5 fw-bold">  @btnCreate(['href' => route('faculty.create')]) @endbtnCreate() Facultys Table</h4>
  </div>
  <div class="col-md-4 mb-3">
   <form action="{{ route('faculty.index') }}" method="get">
     <div class="input-group mb-3">
      <input type="search" class="form-control" name="name" placeholder="Search name..." required>
      @btnSearch() @endbtnSearch
    </div>
   </form>
  </div>
</div>