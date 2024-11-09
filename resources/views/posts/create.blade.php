<x-layout
    meta-title="Create New Post"
    meta-description="Form to create a new post"
>
    <h1>Create New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label for="">
            <br>Title
            <br><input name="title" type="text">
        </label>
        <label for="">
            <br>Body
            <br><textarea name="body"></textarea>
        </label>
        <br>
        <button type="submit">Send</button>
    </form>

    <br>
    <a href="{{route('posts.index')}}"> Back</a>

</x-layout>
