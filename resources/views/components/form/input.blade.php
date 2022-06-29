<div class="input-group {{ $inputType == 'file' ? 'file-input-group' : '' }}">
    @if ($inputType != 'file')
        <label for="{{ strtolower($label) }}">{{ $label }}</label>
    @endif
    <input type="{{ $inputType ?? 'text' }}" name="{{ strtolower($label) }}" placeholder="{{ $placeholder }}"
        value="{{ $value }}" {{ $attributes }} />
    @if ($inputType == 'file')
        <label id="file-label" for="{{ strtolower($label) }}">&checkmark; {{ $placeholder }}</label>
    @endif

    @push('scripts')
        <script>
            window.onload = () => {
                const postCoverInput = document.querySelector('input[type="file"]');
                const postCoverContainer = document.querySelector('.file-input-group');
                const postCoverLabel = document.querySelector('#file-label');


                if (postCoverInput && postCoverContainer) {
                    postCoverContainer.onclick = () => postCoverInput.click();
                    postCoverInput.onchange = () => {
                        const {
                            name,
                            size,
                            type
                        } = postCoverInput.files[0];

                        postCoverLabel.innerText = name;
                    };
                }
            }
        </script>
    @endpush

</div>
