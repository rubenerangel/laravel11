<x-layout
    meta-title="Create New Post"
    meta-description="Form to create a new post"
>
    <h1>Create New Post</h1>
    @dump($errors->all())
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="">
            <br>Title
            <br><input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <label for="">
            <br>Body
            <br><textarea name="body">{{ old('body') }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Send</button>
    </form>

    <br>
    <a href="{{route('posts.index')}}"> Back</a>

</x-layout>
