<div class="row">
  <div class="col-lg-4">

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" value="{{ old('name' , optional($student ?? null)->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name">
      @if ($errors->has('name'))
        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="mb-3">
      <label for="birthday" class="form-label">Birthday</label>
      <input type="date" name="birthday"  value="{{ old('birthday' , optional($student ?? null)->birthday) }}" class="form-control {{ $errors->has('birthday') ? 'is-invalid':'' }}" id="birthday">
      @if ($errors->has('birthday'))
        <span class="invalid-feedback">{{ $errors->first('birthday') }}</span>
        @endif
    </div>

    <div class="mb-3">
      <label for="schoolyear" class="form-label">schoolyear</label>
      <input type="text" name="schoolyear" value="{{ old('schoolyear' , optional($student ?? null)->schoolyear) }}" class="form-control {{ $errors->has('schoolyear') ? 'is-invalid':'' }}" id="schoolyear">
      @if ($errors->has('schoolyear'))
        <span class="invalid-feedback">{{ $errors->first('schoolyear') }}</span>
        @endif
    </div>

  </div>
  <div class="col-lg-4">
    
   <div class="mb-3">
    <label for="yearlevel" class="form-label">Yearlevel</label>
    <select class="form-select {{ $errors->has('yearlevel') ? 'is-invalid':'' }}" name="yearlevel" id="yearlevel">
      @if ($v = old('yearlevel' , optional($student ?? null)->yearlevel))
      <option selected>{{ $v }}</option>
      @else
      <option selected disabled>Choose...</option>
      @endif
      <option>test</option>
    </select>
    @if ($errors->has('yearlevel'))
        <span class="invalid-feedback">{{ $errors->first('yearlevel') }}</span>
        @endif
   </div>

   <div class="mb-3">
    <label for="course" class="form-label">Course / Strand</label>
    <select class="form-select {{ $errors->has('course') ? 'is-invalid':'' }}" name="course" id="course">
      @if ($v = old('course' , optional($student ?? null)->course))
      <option selected>{{ $v }}</option>
      @else
      <option selected disabled>Choose...</option>
      @endif
      <option>test</option>
    </select>
    @if ($errors->has('course'))
        <span class="invalid-feedback">{{ $errors->first('course') }}</span>
        @endif
   </div>

   <div class="mb-3">
    <label for="section" class="form-label">Section / Block</label>
    <select class="form-select {{ $errors->has('section') ? 'is-invalid':'' }}" name="section" id="section">
      @if ($v = old('section' , optional($student ?? null)->section))
      <option selected>{{ $v }}</option>
      @else
      <option selected disabled>Choose...</option>
      @endif
      <option>test</option>
    </select>
    @if ($errors->has('section'))
        <span class="invalid-feedback">{{ $errors->first('section') }}</span>
        @endif
   </div>

  </div>
  <div class="col-lg-4">

    <div class="mb-3 text-center">
      @img(['src' => $student->image ?? null]) @endimg()
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="has_image" value="check" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Has an image?
        </label>
      </div>
      <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid':'' }}" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
      @if ($errors->has('image'))
        <span class="invalid-feedback">{{ $errors->first('image') }}</span>
        @endif
    </div>

  </div>

  <div class="row">

    <div class="col-lg-4">
      <div class="mb-3">
        <label for="goal" class="form-label">Goal</label>
        <textarea class="form-control {{ $errors->has('goal') ? 'is-invalid':'' }}" name="goal" id="goal" rows="3">{{ old('goal' , optional($student ?? null)->goal) }}</textarea>
        @if ($errors->has('goal'))
        <span class="invalid-feedback">{{ $errors->first('goal') }}</span>
        @endif
      </div>
    </div>

    <div class="col-lg-4">
      <div class="mb-3">
        <label for="motto" class="form-label">Motto</label>
        <textarea class="form-control {{ $errors->has('motto') ? 'is-invalid':'' }}" name="motto" id="motto" rows="3">{{ old('motto' , optional($student ?? null)->motto) }}</textarea>
        @if ($errors->has('motto'))
        <span class="invalid-feedback">{{ $errors->first('motto') }}</span>
        @endif
      </div>
    </div>

    <div class="col-lg-4">
      <div class="mb-3">
        <label for="awards" class="form-label">Awards</label>
        <textarea class="form-control {{ $errors->has('awards') ? 'is-invalid':'' }}" name="awards" id="awards" rows="3">{{ old('awards' , optional($student ?? null)->awards) }}</textarea>
        @if ($errors->has('awards'))
        <span class="invalid-feedback">{{ $errors->first('awards') }}</span>
        @endif
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    @btnSubmit() @endbtnSubmit
  </div>
</div>