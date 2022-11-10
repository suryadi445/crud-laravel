<div class="form-group row">
    <label for="{{ $field }}" class="col-sm-2 col-form-label">{{ $tag }}</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" value={{ $value }} name="{{ $field }}"
            id="{{ $field }}">
        @error('field')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
</div>
