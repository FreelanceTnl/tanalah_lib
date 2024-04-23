@php
$class ??= null;
$name ??= '';
$label ??= ucfirst($name);
@endphp
<div @class(["form-group",$class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" class="form-select" name="{{ $name }}{{ $multiple ? '[]' : ''}}" {{ $multiple ? 'multiple' : ''}}>
        @foreach($options as $k=>$v)
        <option @selected($value->contains($k)) value="{{ $k }}">{{ $v }}</option>
        @endforeach
    </select>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>