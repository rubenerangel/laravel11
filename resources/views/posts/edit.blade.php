<x-layout
    meta-title="Edit Post"
    meta-description="Edit post"
>
    <h1>{{ __('Edit Post') }}</h1>
    {{-- @dump($errors->all()) --}}
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <br>
        <button type="submit">{{ __('Send') }}</button>
    </form>

    <br>
    <a href="{{route('posts.index')}}">{{ __('Back') }}</a>

</x-layout>
