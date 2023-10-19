<{{ $as }} {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    @foreach ($items as $key=>$item)
        <div class="c-accordion__item">
            <x-link 
                buttonTheme="primary"
                variant="outline"
                class="c-accordion__button u-px-3 u-py-4 collapsed"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#collapse{{$key}}-{{$block}}" 
                aria-expanded="true" 
                aria-controls="collapse{{$key}}-{{$block}}"
            >
                <span>{{ $item['title'] ?? '' }}</span>
                <i class="icon-add"></i>
            </x-link>
            <div id="collapse{{$key}}-{{$block}}" class="c-accordion__content accordion-collapse collapse" data-bs-parent="#{{ $attributes['id'] ?? false }}">
                <div class="u-px-3 u-py-4">
                    {!! $item['content'] ?? '' !!}
                </div>
            </div>
        </div>
    @endforeach
</{{ $as }}>
