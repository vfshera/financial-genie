<x-admin-layout>
    <x-slot name="pageTitle">Post Compose</x-slot>

    <div class="compose-page">
        <h1>Compose</h1>
        <button id="editorSave" class="px-3 py-1.5 bg-cool text-white rounded">Save</button>

        <form id="quillForm" action="{{ route('admin.posts.create') }}" method="POST">
            <input type="text" name="quillcontent" hidden value="" />
            @csrf

        </form>

        <div id="editor-wrapper">
            <section class="editor" id="editor">

            </section>
        </div>

    </div>


    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" defer></script>
    @endpush
</x-admin-layout>
