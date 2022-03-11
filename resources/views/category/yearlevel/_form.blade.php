
<div class="mb-3">
  <label for="name" class="form-label">Yearlevel</label>
  <input type="text" name="name" value="{{ old('name' , optional($yearlevel ?? null)->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name">
  @if ($errors->has('name'))
  <span class="invalid-feedback">{{ $errors->first('name') }}</span>
  @endif
</div>
