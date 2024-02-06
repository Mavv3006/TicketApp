@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'disabled:border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm disabled:text-gray-500 disabled:bg-gray-200']) !!}>
