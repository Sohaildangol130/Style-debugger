<div {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    <x-image 
        as=""
        class="" 
        imgClass="" 
        ratio="u-ratio-16x9"
        objectFit="cover"
        isLazy=true
        placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
    >
    </x-image>
    <x-stack stack='{"default":"1"}' class="u-d-flex u-flex-column">
        @if(isset($eyebrowhref))
            <a href="{{ $eyebrowhref }}" title='title' class="c-card-media--eyebrow-link">
        @endif
                <x-text as="span">category</x-text>
        @if(isset($eyebrowhref))
            </a>
        @endif
        <x-text as="h2">Title goes here</x-text>
        <x-text as="p">description goes here</x-text>
    </x-stack>
    @if(isset($cardhref))
        <a href='{{ $cardhref }}' class='c-card-media--overlay-link' title='title'>link</a>
    @endif
</div>
