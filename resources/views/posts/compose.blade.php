<x-admin-layout>

    @php
        $pageTitle = request()->routeIs('admin.posts.compose') ? 'Compose Post' : 'Edit Post';
    @endphp

    <x-slot name="pageTitle">
        {{ $pageTitle }} </x-slot>

    <div class="compose-page">
        <div class="compose-header">
            <h1>{{ $pageTitle }}</h1>
            <button id="editorSubmit" class="btn-submit-post">{{ isset($post) ? 'Update' : 'Save' }}</button>
        </div>

        <div id="editor-wrapper">
            <form id="quillForm"
                action="{{ isset($post) ? route('admin.posts.update', [$post]) : route('admin.posts.create') }}"
                method="POST">
                <input type="text" id="quillcontent" name="quillcontent" hidden
                    value=" {{ $post->richtext ?? '' }}" />


                <div class="hinted">
                    @error('title')
                        <div class="text-red-500 bg-red-50 p-1 my-1">{{ $message }}</div>
                    @enderror

                    <x-form.input label="Title" type="text" placeholder="Enter title here..."
                        value="{{ $post->title ?? '' }}" />



                    <x-form.hint name="slug" hint="the-title-slug-will-appear-here" />

                </div>


                @csrf

            </form>

            @error('quillcontent')
                <div class="text-red-500 bg-red-50 p-1 my-1">{{ $message }}</div>
            @enderror

            <section class="editor" id="editor">

            </section>
        </div>

    </div>


    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" defer></script>
    @endpush
</x-admin-layout>
