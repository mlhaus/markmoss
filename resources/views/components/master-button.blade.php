@props([
    'url' => '/'
    , 'align' => 'left'
])
<div class="ic-more-btn {{ $align == 'center' ? 'ic-pt-80 text-center' : '' }} animated"  data-animation-in="fadeInUp">
    <a href="{{ url($url) }}" class="ic-btn">{{ $slot }}</a>
</div>

