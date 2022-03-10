
<div class="mb-3">
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    section / block
  </button>
  <ul class="dropdown-menu">
    @forelse (section() as $item)
        <form action="{{ route('section') }}" method="get">
          <li>
            <input type="submit" value="{{ $item->name }}" name="search" class="dropdown-item">
          </li>
         
        </form>
    @empty
        
    @endforelse
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    course / strand
  </button>
  <ul class="dropdown-menu">
    @forelse (course() as $item)
    <form action="{{ route('course') }}" method="get">
      <li>
        <input type="submit" value="{{ $item->name }}" name="search" class="dropdown-item">
      </li>
     
    </form>
@empty
    
@endforelse
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    yearlevel
  </button>
  <ul class="dropdown-menu">
    @forelse (yearlevel() as $item)
        <form action="{{ route('yearlevel') }}" method="get">
          <li>
            <input type="submit" value="{{ $item->name }}" name="search" class="dropdown-item">
          </li>
         
        </form>
    @empty
        
    @endforelse
  </ul>
</div>
</div>