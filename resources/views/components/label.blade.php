@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dgrey']) }}>
    {{ $value ?? $slot }}
</label>
