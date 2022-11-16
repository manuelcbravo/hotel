
<div class="mb-4" {{ $validationclass ?? '' }}>
    <label class="form-label" for="{{ $id }}">{{ $titulo }}</label>
    <input type="{{ $tipo }}" class="form-control form-control-lg" name="{{ $id }}" id="{{ $id }}" placeholder="{{$holder}}" required="{{ $required ?? 'false' }}" {{ $options ?? '' }}>
    <span class="invalid-feedback">{{ $error ?? 'Campo obligatorio.'}}</span>
</div>
