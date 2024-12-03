<x-layout meta-title="Blog" meta-description="Blog description">
    <h1>Blog</h1>
    <x-slot:sidebar>
        Blog
    </x-slot>
    <a href="{{route('posts.create')}}">Create new post</a>
    @foreach ($posts as $post)
    <div style="display: flex; align-items: baseline">
        <h2>
            <a href="{{route('posts.show', $post)}}"> {{ $post->title}}</a>
        </h2> &nbsp;
        <a href="{{ route('posts.edit', $post) }}">{{__('Edit')}}</a> &nbsp;
        {{-- <a href="{{ route('posts.destroy', $post) }}">{{__('Delete')}}</a> --}}

        <form action="{{ route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                {{__('Delete')}}
            </button>
        </form>
    </div>
    {{-- @dump($post) --}}
    @endforeach
</x-layout>
