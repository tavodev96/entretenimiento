@props(['value'])
<select {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    <option value="" hidden> Seleccionar {{ $value ?? $slot }}</option>
    {{ $options }}
</select>
