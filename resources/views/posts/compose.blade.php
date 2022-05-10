<x-admin-layout>
    <x-slot name="pageTitle">Post Compose</x-slot>

    <div class="compose-page">
        <h1>Compose</h1>
        <button id="editorSave" class="px-3 py-1.5 bg-cool text-white rounded">Save</button>

        <div id="editor-wrapper">
            <section class="editor" id="editor">

            </section>
        </div>

    </div>


    @push('scripts')
        <script>

        </script>
    @endpush
</x-admin-layout>
