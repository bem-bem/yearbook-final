<div class="row justify-content-center">
  <div class="col-lg-6">
    <div class="mb-3">
      <label for="image" class="form-label">Image's</label>
      <input type="file" name="image[]" multiple class="form-control {{ $errors->has('image') ? 'is-invalid':'' }}" id="image">
      @if ($errors->has('image'))
      <span class="invalid-feedback">{{ $errors->first('image') }}</span>
      @endif
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <textarea class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" name="title" id="title" rows="3">{{ old('title' , optional($student ?? null)->title) }}</textarea>
      @if ($errors->has('title'))
        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
        @endif
    </div>
        @btnSubmit() @endbtnSubmit
  </div>
</div>