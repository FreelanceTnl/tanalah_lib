@php
$class ??= null;
@endphp
<div @class(["form-check form-switch",$class])>
    <input type="hidden" value="0" name="{{ $name }}">
    <input @checked(old($name, $value ?? false)) class="form-check-input @error($name) is-invalid @enderror" type="checkbox" role="switch" id="{{ $name }}" name="{{ $name }}" value="1">
    
    <label class="form-label-check" for="{{ $name }}">{{ $label }}</label>
    
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>