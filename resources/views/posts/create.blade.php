<x-layout
    meta-title="Create New Post"
    meta-description="Form to create a new post"
>
    <h1>{{ __('Create New Post') }}</h1>
    {{-- @dump($post) --}}
    {{-- @dump($errors->all()) --}}
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form-fields')
        <br>
        <button type="submit">{{ __('Send') }}</button>
    </form>

    <br>
    <a href="{{route('posts.index')}}">{{ __('Back') }}</a>

</x-layout>
