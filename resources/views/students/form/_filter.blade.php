
<div class="btn-group mb-3">
  <button type="button" class="btn btn-outline-primary outline-primarywn-toggle btn-sm btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    section / block
  </button>
  <ul class="dropdown-menu">
    @forelse (section() as $item)
        <form action="{{ route('student.index') }}" method="get">
          <li>
            <input type="submit" value="{{ $item->name }}" name="section" class="dropdown-item">
          </li>
         
        </form>
    @empty
        
    @endforelse
  </ul>
</div>

<div class="btn-group mb-3">
  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    course / strand
  </button>
  <ul class="dropdown-menu">
    @forelse (course() as $item)
    <form action="{{ route('student.index') }}" method="get">
      <li>
        <input type="submit" value="{{ $item->name }}" name="course" class="dropdown-item">
      </li>
     
    </form>
@empty
    
@endforelse
  </ul>
</div>

<div class="btn-group mb-3">
  <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
    yearlevel
  </button>
  <ul class="dropdown-menu">
    @forelse (yearlevel() as $item)
        <form action="{{ route('student.index') }}" method="get">
          <li>
            <input type="submit" value="{{ $item->name }}" name="yearlevel" class="dropdown-item">
          </li>
         
        </form>
    @empty
        
    @endforelse
  </ul>
</div>