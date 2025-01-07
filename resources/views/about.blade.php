<x-blog-layout meta-title="About" meta-description="About description" :sum="2+2">
    <div>
        <h1
            class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            About
        </h1>
        <x-slot:sidebar>
            About
        </x-slot>
    </div>
</x-layout>
