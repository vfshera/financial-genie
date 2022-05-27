<x-admin-layout>

    @php
        $pageTitle = request()->routeIs('admin.posts.compose') ? 'Compose Post' : 'Edit Post';
    @endphp
    <x-slot name="pageTitle">
        {{ $pageTitle }} </x-slot>

    <div class="compose-page">
        <div class="compose-header">
            <h1>{{ $pageTitle }}</h1>
            <button id="editorSubmit" class="btn-submit-post">{{ $post ? 'Update' : 'Save' }}</button>
        </div>



        <div id="editor-wrapper">
            <form id="quillForm" action="{{ route('admin.posts.create') }}" method="POST">
                <input type="text" id="quillcontent" name="quillcontent" hidden
                    value=" {{ $post->richtext ?? '' }}" />


                <div class="hinted">
                    <x-form.input label="Title" type="text" placeholder="Enter title here..."
                        value="{{ $post->title ?? '' }}" />
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
