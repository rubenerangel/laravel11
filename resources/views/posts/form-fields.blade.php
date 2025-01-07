<div for="">
    {{-- <br>{{ __('Title') }} --}}
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input
        id="title"
        name="title"
        type="text"
        value="{{ old('title', $post->title) }}"
        class="w-full mt-1"
    />
    {{-- @error('title')
        <br>
        <small style="color: red">{{$message}}</small>
    @enderror --}}
    <x-input-error :messages="$errors->get('title')" />
</div>
<div>
    {{-- <br>{{ __('Body') }} --}}
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea
        id="body"
        name="body"
        class="w-full mt-1"
    >{{ old('body', $post->body) }}</x-textarea>
    {{-- @error('body')
        <br>
        <small style="color: red">{{$message}}</small>
    @enderror --}}
    <x-input-error :messages="$errors->get('body')" />
</div>
