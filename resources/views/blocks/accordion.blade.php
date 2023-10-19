{{--
    script[leadspace.js]script
    style[modules/banner.scss]style
    Title: Accordion
    Description: Accordion
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS:
    EnqueueAssetsJS:
--}}
@if (!empty($items))
    <x-accordion class="" id="{{ $block['id']}}" :items="$items" block="{{$block['id']}}"></x-accordion>
@endif
