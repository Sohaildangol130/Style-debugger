<{{ ($as) }} {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    <label for="input_name" class="c-form-label">
        {{ $label }}
    </label>
    <input type="{{ $type }}" class="c-form-control" 
    placeholder="{{ $placeholder }}" 
    id="input_name" aria-describedby="">
</{{$as}}>
