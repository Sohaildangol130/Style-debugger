{{--
    script[banner.js]script
    style[modules/leadspace.scss]style
    Title: Headline Module only for testing
    Description: Headline Module]
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
<!-- leadspace html goes here -->

@if ( ! empty( $is_preview  ) )
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
@php
    
    // Dynamic data
    $descriptionData = "<p>Dynamic description</p><span>span content</span>";
    $eyebrowData = "This is eyebrow data";
    $ctaContent = "https://google.com";

    // JSON attribute values
    $stack = json_encode(["default" => 1, "sm" => 3, "md" => 4, "lg" => 5]);
    $eyebrow = json_encode(["as" => "span", "content" => $eyebrowData, "variant" => "h1", "class" => "u-text-blue"]);
    $title = json_encode(["as" => "", "content" => "this is title", "variant" => "", "class" => ""]);
    $description = json_encode(["as" => "", "content" => $descriptionData, "variant" => "p", "class" => "p"]);
    $cta = json_encode(["as" => "",'target'=>'_blank', "href" => $ctaContent, "variant" => "primary", "class" => "",'title' => 'button title' ,'buttonTheme'=>'primary']);
    


@endphp


<x-input 
    stack='{"default": "1","md":"2"}'
    orientation="vertical"
    type="email"
    placeholder="placeholder text goes here"
    label="label text goes here"
>
</x-input>


<x-select stack='{"default": "1","md":"2"}' orientation="vertical">
    <option selected>Select Options</option>
    <option value="option1">Option1</option>
</x-select>
<x-select stack='{"default": "1","md":"2"}' orientation="vertical" label="Select option" options='{
    "one" : "Option1",
    "two" : "Option2",
    "three" : "Option3",
    "four" : "Option4",
    }'>
    <option selected>Select Options</option>
</x-select>

{{-- 
    video host not added = its using video tag
    video type not added = its autoplay video
--}}
<x-video 
    as=""
    class="" 
    isLazy="true"
    videoClass="" 
    figureClass="" 
    videoHost="vimeo" 
    videoType="clickPlay"
    objectFit="cover"
    ratio="u-ratio-16x9"
    placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
    {{-- src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" --}}
    src="https://player.vimeo.com/video/698163703?h=5677cfb963&amp;background=1"
>
</x-video>



<x-video 
    as=""
    class="asdasd" 
    isLazy="true"
    videoClass="" 
    figureClass="" 
    videoHost="youtube" 
    videoType="clickPlay"
    objectFit="cover"
    ratio="u-ratio-16x9"
    placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
    src="https://www.youtube.com/embed/k8YiqM0Y-78"
>
</x-video>

<x-video 
    as=""
    class="asdasd" 
    isLazy="true"
    videoClass="" 
    figureClass="" 
    videoHost="default" 
    videoType="clickPlay"
    objectFit="cover"
    ratio="u-ratio-16x9"
    placeholder="{{@asset('images/images-placeholder@2x.jpg')}}"
    src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
>
</x-video>








<x-headline class='' :stack='$stack' as='' blockAligns='end' eyebrow='{{$eyebrow}}' title='{{$title}}' description='{{$description}}' cta='{{$cta}}'>
    Slot content here aayush
</x-headline>



<x-headline class="" as="" blockAligns='end'
    stack='{"default": "1"}'
    eyebrow='{"as":"span","content":"{{$eyebrowData}}","variant":"","class":""}'
    title='{"content":"asd"}'
    description='{"as":"","content":"","variant":"","class":""}'
    cta='{"as":"","title":"","variant":"outline","class":"","href":"https://google.com","buttonTheme":"primary","target":"_blank"}'
>
Slot content here
</x-headline>


@endif
