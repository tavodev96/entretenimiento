@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-slate-50']) }}>
    {{ $value ?? $slot }}
</label>
