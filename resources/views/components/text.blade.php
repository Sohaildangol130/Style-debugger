<{{ ($as) }}  {!! !empty($attributes) ? $attributes->merge(['class' => $class]) : 'class='.$class !!}>
    {!! $slot !!}
</{{ ($as) }}>
