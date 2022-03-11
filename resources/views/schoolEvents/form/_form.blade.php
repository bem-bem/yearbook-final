<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" id="title">
      @if ($errors->has('title'))
        <span class="invalid-feedback">{{ $errors->first('title') }}</span>
        @endif
    </div>

  <div class="mb-3">
    <label for="event_date" class="form-label">Date</label>
      <input type="date" name="event_date" class="form-control {{ $errors->has('event_date') ? 'is-invalid':'' }}" id="event_date">
    @if ($errors->has('event_date'))
      <span class="invalid-feedback">{{ $errors->first('event_date') }}</span>
      @endif
  </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image's</label>
      <input type="file" name="image[]" multiple class="form-control {{ $errors->has('image') ? 'is-invalid':'' }}" id="image">
      @if ($errors->has('image'))
      <span class="invalid-feedback">{{ $errors->first('image') }}</span>
      @endif
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit Form</button>
  </div>
</div>