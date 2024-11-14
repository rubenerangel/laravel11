<x-layout
    meta-title="Edit Post"
    meta-description="Edit post"
>
    <h1>{{ __('Edit Post') }}</h1>
    {{-- @dump($errors->all()) --}}
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PATCH')
        <label for="">
            <br>{{ __('Title') }}
            <br><input name="title" type="text" value="{{ old('title', $post->title) }}">
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <label for="">
            <br>{{ __('Body') }}
            <br><textarea name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br>
        <button type="submit">{{ __('Send') }}</button>
    </form>

    <br>
    <a href="{{route('posts.index')}}">{{ __('Back') }}</a>

</x-layout>
