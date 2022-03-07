<div class="row">
  <div class="col-lg-4">

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" value="{{ old('name' , optional($faculty ?? null)->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name">
      @if ($errors->has('name'))
        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="mb-3">
      <label for="job" class="form-label">Job</label>
      <input type="text" name="job"  value="{{ old('job' , optional($faculty ?? null)->job) }}" class="form-control {{ $errors->has('job') ? 'is-invalid':'' }}" id="job">
      @if ($errors->has('job'))
        <span class="invalid-feedback">{{ $errors->first('job') }}</span>
        @endif
    </div>

    <div class="mb-3">
      <label for="schoolyear" class="form-label">schoolyear</label>
      <input type="text" name="schoolyear" value="{{ old('schoolyear' , optional($faculty ?? null)->schoolyear) }}" class="form-control {{ $errors->has('schoolyear') ? 'is-invalid':'' }}" id="schoolyear">
      @if ($errors->has('schoolyear'))
        <span class="invalid-feedback">{{ $errors->first('schoolyear') }}</span>
        @endif
    </div>

  </div>
  <div class="col-lg-4">
    
    <div class="mb-3">
      <label for="job_description" class="form-label">job_description</label>
      <input type="text" name="job_description" value="{{ old('job_description' , optional($faculty ?? null)->job_description) }}" class="form-control {{ $errors->has('job_description') ? 'is-invalid':'' }}" id="job_description">
      @if ($errors->has('job_description'))
        <span class="invalid-feedback">{{ $errors->first('job_description') }}</span>
        @endif
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
  
  <div class="col-lg-4">

    <div class="mb-3 text-center">
      @img(['src' => $faculty->image ?? null]) @endimg()
    </div>
  </div>

<div class="row">
  <div class="col-lg-12">
    @btnSubmit() @endbtnSubmit
  </div>
</div>