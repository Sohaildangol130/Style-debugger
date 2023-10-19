{{--
    script[banner.js]script
    style[modules/leadspace.scss]style
    Title: Leadspace
    Description: Leadspace Description]
    Category: outside
    Icon: admin-tools
    Keywords: leadspace
    Mode: auto
    Align: center
    PostTypes: post page pm_pattern
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
<!-- leadspace html goes here -->

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace-1-XL_2x.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
@php
    $blockId = get_field('block_name') ?? $block['id'];
    //    $description = htmlentities($description);
@endphp
{{-- {{ (htmlentities($description)) }} --}}
    <h1 class="h1 u-text-align-center">WEB UI asd</h1>
    {{-- 
        default = Content side by side 
        full = Full width banner 
    --}}
    <section class="{{ $leadspaceLayout == 'full' ? 'u-position-relative m-leadspace-full-bg' : 'm-leadspace-50/50' }} u-py-20 ">
        <div class="l-container">
            @if ($leadspaceLayout == 'default')
                <div class="l-grid ">
                        <x-headline class="col-span-12 col-span-lg-4 {{ $colStart }}" blockAligns='{{ $blockAlignData }}'
                            stack='{"default": "5", "md": "6", "lg": "10"}'
                            title='{"as": "h1", "content":"{{ $title }}", "class": "m-leadspace__title"}'
                            description='{"as":"div","content":"{!! htmlentities($description) !!}","class":"m-leadspace__description"}'
                            cta='{"title":"{{ isset($cta["title"]) ? $cta["title"] :  false }}","variant":"filled","href":"{{ isset($cta["url"]) ? $cta["url"] :  false }}","buttonTheme":"primary"}'
                        >
                        </x-headline>
                    <div class="col-span-12 col-span-lg-5 col-start-lg-7">
                        @if ($hasVideo && $video !='')
                            <x-video 
                                as=""
                                class="" 
                                isLazy="{{ $is_editor ? false : true }}"
                                videoClass="" 
                                figureClass="" 
                                autoPlay=false
                                objectFit="cover"
                                ratio="u-ratio-16x9"
                                placeholder="{{ $image['url'] ?? false }}"
                                src="{{ $video }}"
                            >
                            </x-video>
                        @elseif( isset($image['url']) )
                            <x-image 
                                class="u-bg-black-dark" 
                                imgClass="" 
                                ratio="u-ratio-16x9"
                                objectFit="cover"
                                isLazy="{{ ($is_editor) ? false : true }}"
                                placeholder="{{ $image['url'] ?? false }}"
                            >
                            </x-image>
                        @endif
                    </div>
                </div>
            @else
                @if ($hasVideo && $video !='')
                    <x-video 
                        as=""
                        class="" 
                        videoClass="" 
                        figureClass="" 
                        autoPlay=true
                        objectFit="cover"
                        ratio="u-ratio-16x9"
                        placeholder="{{ $image['url'] ?? false }}"
                        src="{{ $video }}"
                    >
                    </x-video>
                @elseif( isset($image['url']) )
                    <x-image 
                        imgClass="" 
                        isLazy={{ $is_editor ? false : true }}
                        objectFit="cover"
                        ratio="u-ratio-16x9"
                        class="u-bg-black-dark" 
                        placeholder="{{ $image['url'] ?? false }}"
                    >
                    </x-image>
                @endif
                <div class="l-grid u-position-relative u-text-white-light u-z-10">
                    <x-headline class="col-span-12 col-span-lg-4 {{ $colStart }}" blockAligns='{{ $blockAlignData }}'
                        stack='{"default": "5", "md": "6", "lg": "10"}'
                        eyebrow='{"as":"p","content":"{{ $eyebrow }}","variant":""}'
                        title='{"as": "h1", "content":"{{ $title }}"}'
                        description='{"as":"div","content":"{!! htmlentities($description) !!}"}'
                        cta='{"title":"{{ isset($cta["title"]) ? $cta["title"] :  false }}","variant":"filled","href":"{{ isset($cta["url"]) ? $cta["url"] :  false }}","buttonTheme":"primary"}'
                    >
                    </x-headline>
                    <div class="col-span-12 col-span-lg-5 col-start-lg-7">
                    </div>
                </div>
            @endif
        </div>
    </section>
@endif
