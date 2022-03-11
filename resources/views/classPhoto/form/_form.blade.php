<div class="row">
  <div class="col-lg-12">
    @img(['src' => $classphoto->image ?? null]) @endimg()
  </div>
</div>

<div class="row">

  <div class="col-lg-4">
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="has_image" value="check" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Check this if the image is not required
        </label>
      </div>
      <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid':'' }}" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
      @if ($errors->has('image'))
        <span class="invalid-feedback">{{ $errors->first('image') }}</span>
        @endif
    </div>
  </div>

  <div class="col-lg-2">
    <div class="mb-3">
      <label for="schoolyear" class="form-label">schoolyear</label>
      <input type="text" name="schoolyear" value="{{ old('schoolyear' , optional($classphoto ?? null)->schoolyear) }}" class="form-control {{ $errors->has('schoolyear') ? 'is-invalid':'' }}" id="schoolyear">
      @if ($errors->has('schoolyear'))
        <span class="invalid-feedback">{{ $errors->first('schoolyear') }}</span>
        @endif
    </div>
  </div>

  <div class="col-lg-2">
    <div class="mb-3">
      <label for="yearlevel" class="form-label">Yearlevel</label>
      <select class="form-select {{ $errors->has('yearlevel') ? 'is-invalid':'' }}" name="yearlevel" id="yearlevel">
        @if ($v = old('yearlevel' , optional($classphoto ?? null)->yearlevel))
        <option selected>{{ $v }}</option>
        @else
        <option selected disabled>Choose...</option>
        @endif
        @forelse (yearlevel() as $item)
        <option>{{ $item->name }}</option>
    @empty
    
    @endforelse
      </select>
      @if ($errors->has('yearlevel'))
          <span class="invalid-feedback">{{ $errors->first('yearlevel') }}</span>
          @endif
     </div>
  </div>

  <div class="col-lg-2">
    <div class="mb-3">
      <label for="course" class="form-label">Course / Strand</label>
      <select class="form-select {{ $errors->has('course') ? 'is-invalid':'' }}" name="course" id="course">
        @if ($v = old('course' , optional($classphoto ?? null)->course))
        <option selected>{{ $v }}</option>
        @else
        <option selected disabled>Choose...</option>
        @endif
        @forelse (course() as $item)
        <option>{{ $item->name }}</option>
    @empty
    
    @endforelse
      </select>
      @if ($errors->has('course'))
          <span class="invalid-feedback">{{ $errors->first('course') }}</span>
          @endif
     </div>
  </div>

  <div class="col-lg-2">
    <div class="mb-3">
      <label for="section" class="form-label">Section / Block</label>
      <select class="form-select {{ $errors->has('section') ? 'is-invalid':'' }}" name="section" id="section">
        @if ($v = old('section' , optional($classphoto ?? null)->section))
        <option selected>{{ $v }}</option>
        @else
        <option selected disabled>Choose...</option>
        @endif
        @forelse (section() as $item)
        <option>{{ $item->name }}</option>
    @empty
    
    @endforelse
      </select>
      @if ($errors->has('section'))
          <span class="invalid-feedback">{{ $errors->first('section') }}</span>
          @endif
     </div>
  </div>

</div>
