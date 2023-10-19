<{{ ($as) }} {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    @if ( isset($eyebrow['content']) && $eyebrow['content'] !== '')
        <x-text class="{{ $eyebrow['class'] ?? '' }}" variant="{{ $eyebrow['variant'] ?? '' }}" as="{{ $eyebrow['as'] ?? '' }}">{!! $eyebrow['content'] !!}</x-text>
    @endif
    @if ( isset($title['content']) && $title['content'] !== '')
        <x-text class="{{ $title['class'] ?? '' }}" variant="{{ $title['variant'] ?? '' }}" as="{{ $title['as'] ?? '' }}">{!! $title['content'] !!}</x-text>
    @endif

    @if ( isset($description['content']) && $description['content'] !== '')
        <x-text class="{{ $description['class'] ?? '' }}" variant="{{ $description['variant'] ?? '' }}" as="{{ $description['as'] ?? '' }}">{!! html_entity_decode($description['content']) !!}</x-text>
    @endif
    @issetAndNotEmpty($cta['href'])
        <x-link 
            buttonTheme="{{ $cta['buttonTheme'] ?? '' }}"
            variant="{{ $cta['variant'] ?? '' }}"
            href="{{ $cta['href'] ?? '' }}"
            target="{{ $cta['target'] ?? '' }}"
            class="{{$cta['class'] ?? ''}}"
        >
        @issetAndNotEmpty($cta['title']) 
            {{ $cta['title'] }}
        @elseIssetAndNotEmpty
            {{ $cta['href'] }}
        @endIssetAndNotEmpty
        </x-link>
    @endIssetAndNotEmpty

    {!! $slot !!}
</{{ ($as) }}>
