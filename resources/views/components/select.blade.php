<{{ ($as) }} {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    @if ($label)
        <label for="select_name" class="c-form-label">
            {{ $label }}
        </label>
    @endif
    <select id="select_name" class="c-form-control c-form-select" aria-invalid="false">
        {!! $slot !!}
        @if ($options)
                @foreach ($options as $key=>$option)
                    <option value="{{ $key }}">{{ $option }}</option>
                @endforeach
        @endif
    </select>
</{{$as}}>
