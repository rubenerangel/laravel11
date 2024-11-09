<x-layout meta-title="Blog" meta-description="Blog description" :sum="2+2">
    <h1>Blog</h1>
    <x-slot:sidebar>
        Blog
    </x-slot>
    @foreach ($posts as $post)
    <h2>
        <a href="{{route('posts.show', $post)}}"> {{ $post->title}}</a>
    </h2>
    {{-- @dump($post) --}}
    @endforeach
</x-layout>
