<x-admin-layout>

    @php
        $pageTitle = request()->routeIs('admin.posts.compose') ? 'Compose Post' : 'Edit Post';
    @endphp

    <x-slot name="pageTitle">
        {{ $pageTitle }}
    </x-slot>
    <div class="compose-page">
        <div class="compose-header">
            <h1>{{ $pageTitle }}</h1>
            <button id="editorSubmit" class="btn-submit-post">{{ isset($post) ? 'Update' : 'Save' }}</button>
        </div>

        <div id="editor-wrapper">
            <form id="quillForm"
                action="{{ isset($post) ? route('admin.posts.update', [$post]) : route('admin.posts.create') }}"
                enctype="multipart/form-data" method="POST">
                <input type="text" id="quillcontent" name="quillcontent" hidden
                    value=" {{ $post->richtext ?? '' }}" />




                <div class="hinted">
                    @error('title')
                        <div class="text-red-500 bg-red-50 p-1 my-1">{{ $message }}</div>
                    @enderror

                    <x-form.input label="Title" type="text" placeholder="Enter title here..."
                        value="{{ $post->title ?? '' }}" wire:model="title" />



                </div>


                @if (isset($post) && !$post->hasMedia('covers'))
                    @error('cover')
                        <div class="text-red-500 bg-red-50 p-1 my-1">{{ $message }}</div>
                    @enderror

                    <x-form.input label="Cover" type="file" name="cover" aria-required="true" accept="image/*"
                        placeholder="Upload Cover Photo..." :noLabel="true" />
                @elseif (isset($post) && $post->hasMedia('covers'))
                    <div class="has-cover">
                        <button class="edit" type="button" id="editCover">Edit Cover</button>
                        <button class="new" type="button"id="newCover">Upload New Cover</button>
                    </div>
                @endif

                @csrf

            </form>

            @error('quillcontent')
                <div class="text-red-500 bg-red-50 p-1 my-1">{{ $message }}</div>
            @enderror

            <section class="editor" id="editor">

            </section>
        </div>
        <div id="manipulate-cover" class="hidden">
            <span class="close">&times;</span>
            <div class="cover-manipulation">
                <h1>COVER MANIPULATION</h1>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('js/editor.js') }}" defer></script>

        <script>
            const MANIPULATOR_CLASS = "cover-manipulation-wrapper";
            const editBtn = document.querySelector('#editCover');

            const newBtn = document.querySelector('#newCover');
            const manipulator = document.querySelector('#manipulate-cover');


            if (editBtn && newBtn) {
                editBtn.onclick = () => {
                    manipulator.classList = MANIPULATOR_CLASS;
                }
                newBtn.onclick = () => {
                    alert("NEW COVER")
                }
            }
        </script>
    @endpush
</x-admin-layout>
