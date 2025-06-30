@props([
    'url' => '/'
    , 'active' => false
])
<li class="nav-item">
    <a href="{{ url($url) }}" {{ $attributes }} class="{{ $active ? 'active' : 'ic-page-link' }}" {{ $active ? 'aria-current="page"' : '' }}
    >{{ $slot }}
    </a>
</li>
