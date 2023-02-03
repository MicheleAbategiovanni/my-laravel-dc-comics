@php

$type = empty($type) ? "" : $type;

$defaultValue = empty($defaultValue) ? "" : $defaultValue;

@endphp

<div class="input-group mb-3">
    <span class="input-group-text">{{$label}}</span>

    @if ($type === 'textarea')
    <textarea name="description" cols="30" rows="3"
        class="form-control @error('description') is-invalid @enderror">{{ old('description', $defaultValue) }}</textarea>

    @elseif($type === 'date')
    <input type="date" class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}"
        value="{{ old($inputName, $defaultValue) }}">
    
    @else

    <input type="text" class="form-control @error($inputName) is-invalid @enderror" name="{{ $inputName }}"
        value="{{ old($inputName, $defaultValue) }}">

    @endif

    @error($inputName)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>