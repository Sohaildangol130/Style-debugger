<{{ $as }} {{ $attributes->merge(['class' => $class]) }}>
    <img 
        src= ""
        alt="" 
        title="" 
        data-src= "{{ ($placeholder) }}"
        srcset="" 
        width="" 
        height=""
        {{ $attributes->merge(['class' => $imgClass]) }}
    >
    @if ( isset($captionContent))
    <figcaption
        {{ $attributes->merge(['class' => $figCaption]) }}
    >{{$captionContent}}</figcaption>
    @endif
</{{( $as )}}>
