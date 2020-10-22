@php
    if (!isset($attributes)) {
        $attributes = [];
    }

    $attributes['class'] = collect(['form-control input-danger', $attributes['class'] ?? ''])->unique()->implode(' ');
@endphp
@if (@$label)
    {!! Form::label($name, $label, ['class' => 'col-form-label ' . (isset($attributes['required']) && $attributes['required'] ? 'required-flag' : '')]) !!}
@endif
{!! Form::text($name, $value ?? null, $attributes ?? []); !!}
{{ $slot }}
@error($name)
<span class="text-danger error">{{ $message }}</span>
@enderror
