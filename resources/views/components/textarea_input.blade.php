{!! Form::label($name, $label, ['class' => 'col-form-label ' . (isset($attributes['required']) && $attributes['required'] ? 'required-flag' : '')]) !!}
{!! Form::textarea($name, $value ?? null, $attributes ?? []); !!}

@error($name)
<span class="text-danger error">{{ $message }}</span>
@enderror
