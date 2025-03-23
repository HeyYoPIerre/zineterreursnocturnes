@props([
    'name'          => '',
    'id'            => 'tinymce',
    'class'         => '',
    'plugins'       => '',
    'toolbar'       => '',
    'validElements' => 'h2,h3,p,ul,ol,li,br,em,b,strong/b,a[href|target=_blank|rel],div[align]',
    'disabled'      => false,
])

<div>
    <textarea class="form-control shadow-sm {{ $class }}"
        @disabled($disabled)
        name="{{ $name }}"
        id="{{ $id }}"
    >{{ $slot }}</textarea>
</div>

@error ($name)
    <div class="text-danger fs-13px mt-1">
        {{ $message }}
    </div>
@enderror

@pushOnce('scripts')
    <script>
        window.addEventListener('load', function() {
            const el = document.getElementById('{{ $id }}');
            const options = {
                target: el,
                license_key: 'gpl',
                language: 'fr_FR',
                plugins: 'lists code link {{ $plugins }}',
                toolbar: 'h2 h3 | bold italic underline link | bullist numlist | alignleft aligncenter | outdent indent |{{ $toolbar }} | undo redo | code',
                valid_elements: '{{ $validElements }}',
                link_default_target: '_blank',
                menubar: false,
                branding: false,
                contextmenu: false,
                browser_spellcheck : true,
                schema: 'html5',
                setup: function(editor) {
                    editor.on('init', function () {
                        editor.setContent(el.value);
                    });

                    editor.on('change', function () {
                        editor.save();
                        el.value = editor.getContent();
                    });
                }
            };

            const tiny = tinymce.init(options);
        });
    </script>
@endPushOnce
