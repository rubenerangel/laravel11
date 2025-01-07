<x-app-layout
    :meta-title="__('Editing post: ').$post->title"
    meta-description="Edit post"
>
    {{-- <h1>{{ __('Edit Post') }}</h1> --}}
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editing post') }}
        </h1>
    </x-slot>
    {{-- @dump($errors->all()) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form
                        method="POST"
                        action="{{ route('posts.update', $post) }}"
                        class="space-y-4 max-w-xl"
                    >
                        @method('PATCH')
                        @include('posts.form-fields')
                        {{-- <br> --}}
                        <x-primary-button type="submit">{{ __('Send') }}</x-primary-button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    {{-- <a href="{{route('posts.index')}}">{{ __('Back') }}</a> --}}

</x-app-layout>
