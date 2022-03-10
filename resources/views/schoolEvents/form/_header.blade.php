<div class="row justify-content-between">
  <div class="col-md-4">
    <h4 class="fs-5 fw-bold"> @btnCreate(['href' => route('schoolevent.create')]) @endbtnCreate School Events Table</h4>
  </div>
  <div class="col-md-4">
    <form action="{{ route('schoolevent.index') }}" method="get">
      <div class="input-group mb-3">
        <input type="search" name="title" class="form-control" placeholder="Search title..." required>
        @btnSearch() @endbtnSearch
      </div>
    </form>
  </div>
</div>