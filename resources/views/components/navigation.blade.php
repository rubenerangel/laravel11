{{-- @dump(request()->routeIs('home')) --}}
<nav>
    <ul>
        <li>
            <a class="{{ request()->routeIs('home') ? 'text-gray-400' : 'text-gray-600' }}" href="{{ route('home') }}">
                {{ __('Home') }}
            </a>
        </li>
        <li>
            <a class="{{ request()->routeIs('posts.*') ? 'text-gray-400' : 'text-gray-600' }}" href="{{ route('posts.index') }}">{{ __('Blog') }}</a>
        </li>
        <li>
            <a class="{{ request()->routeIs('about') ? 'text-gray-400' : 'text-gray-600' }}" href="{{ route('about') }}">{{ __('About') }}</a>
        </li>
        <li>
            <a class="{{ request()->routeIs('contact') ? 'text-gray-400' : 'text-gray-600' }}" href="{{ route('contact') }}">{{ __('Contact') }}</a>
        </li>
    </ul>
</nav>
