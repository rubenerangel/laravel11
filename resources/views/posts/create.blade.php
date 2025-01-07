<x-app-layout
    meta-title="Create New Post"
    meta-description="Form to create a new post"
>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Post') }}
        </h1>
    </x-slot>
    {{-- @dump($post) --}}
    {{-- @dump($errors->all()) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    @include('posts.form-fields')
                    <button type="submit">{{ __('Send') }}</button>
                </form>
            </div>
        </div>
    </div>

    <br>
    {{-- <a href="{{route('posts.index')}}">{{ __('Back') }}</a> --}}

</x-app-layout>
