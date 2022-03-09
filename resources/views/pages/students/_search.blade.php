<form action="{{ route('student_name') }}" method="get">
  @csrf
  <div class="input-group mb-3">
    <input type="search" name="search" class="form-control" placeholder="Search name">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
  </div>
  @if ($errors->has('search'))
        <span class="invalid-feedback">{{ $errors->first('search') }}</span>
        @endif
</form>