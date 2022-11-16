<div class="mb-4">
    <label class="form-label" for="{{ $id }}">{{ $titulo }}</label>
    <div class="tom-select-custom {{ $id }} custom-empty">
        <select class="js-select form-select" autocomplete="off"
                data-hs-tom-select-options='{
            "placeholder": "Seleccione..."
          }' id="{{$id}}" name="{{$id}}" required="{{ $required ?? 'false' }}">
            <option value="">Seleccione...</option>
        </select>
        <span class="invalid-feedback">Campo obligatorio.</span>
    </div>
</div>