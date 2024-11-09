<x-layout
    meta-title="Create New Post"
    meta-description="Form to create a new post"
>
    <h1>{{ __('Create New Post') }}</h1>
    {{-- @dump($errors->all()) --}}
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="">
            <br>{{ __('Title') }}
            <br><input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <label for="">
            <br>{{ __('Body') }}
            <br><textarea name="body">{{ old('body') }}</textarea>
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
