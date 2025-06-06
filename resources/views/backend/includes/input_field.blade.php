<div class="form-group">
    <label for="{{ $name }}">{{ $title }}</label>
    <input type="text" class="form-control" name="{{ $name }}" id="{{ $name }}"
        value="{{ old($name) }}" placeholder="Enter {{ $title }}">
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
