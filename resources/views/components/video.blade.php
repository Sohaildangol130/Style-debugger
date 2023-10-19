@if ($showVideo)
    <{{ $as }} {{ $attributes->merge(['class' => $class]) }}>
        <div class="c-video-wrap {{ $videoHost == 'youtube' || $videoHost == 'vimeo' ? 'c-video-wrap--vimeo' : '' }}">
            @if ( $videoHost == 'youtube' || $videoHost == 'vimeo')
                <figure 
                    {{ $attributes->merge(['class' => $figureClass]) }}
                    data-src="{{ $src }}"
                    data-trigger="{{ $videoType }}"
                    poster="{{ ($placeholder) }}"
                    {{ $attributes->merge(['class' => $videoClass]) }}
                >
                    @if ($videoHost == 'youtube')
                        <div data-player="true"></div>
                    @endif
                </figure>
            @else
                <figure
                {{ $attributes->merge(['class' => $figureClass]) }}
                >
                    <video
                        id=""
                        playsinline=""
                        loop=""
                        {{ $autoPlay }}
                        poster="{{ $placeholder ?? '' }}"
                        {{ $attributes->merge(['class' => $videoClass]) }}
                    >
                        <source
                            id="mp4"
                            src="{{ $src }}"
                            type='video/mp4'
                        />
                    </video>
                </figure>
            @endif

            <div class="c-video-control">
                @if ( $videoHost == 'youtube' || $videoHost == 'vimeo')
                    @include('icons.play',['btnClass' => 'js-video-trigger-btn--play c-video-control-btn'])
                    @include('icons.pause',['btnClass' => 'js-video-trigger-btn--pause c-video-control-btn'])
                @else
                    @include('icons.play',['btnClass' => 'js-video-trigger-btn js-video-player-btn c-video-control-btn'])
                @endif

            </div>
        </div>
    </{{ $as }}>
@endif
