<div class="input-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $inputType ?? 'text' }}" name="{{ strtolower($label) }}" placeholder="{{ $placeholder }}"
        value="{{ $value }}" />


</div>
