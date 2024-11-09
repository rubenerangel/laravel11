<x-layout meta-title="Blog" meta-description="Blog description" :sum="2+2">
    <h1>Blog</h1>
    <x-slot:sidebar>
        Blog
    </x-slot>
    {{-- @dump($posts) --}}
    @foreach ($posts as $post)
        <h2>{{ $post['title']}}</h2>
    @endforeach
</x-layout>
