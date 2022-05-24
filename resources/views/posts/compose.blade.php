<x-admin-layout>
    <x-slot name="pageTitle">Post Compose</x-slot>

    <div class="compose-page">
        <div class="compose-header">
            <h1>Compose</h1>
            <button id="editorSave" class="btn-save-post">Save</button>
        </div>



        <div id="editor-wrapper">
            <form id="quillForm" action="{{ route('admin.posts.create') }}" method="POST">
                <input type="text" name="quillcontent" hidden value="" />


                <div class="hinted">
                    <x-form.input label="Title" type="text" placeholder="Enter title here..." />
                    <x-form.hint name="slug" hint="the-title-slug-will-appear-here" />
                </div>


                @csrf

            </form>
            <section class="editor" id="editor">

            </section>
        </div>

    </div>


    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" defer></script>
    @endpush
</x-admin-layout>
