@props([
    'value' => null,
])

@php
    $class = "inline-flex items-center gap-2 px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150";
    $class .= " text-white bg-orange-600 hover:bg-orange-700 focus:bg-orange-700 active:bg-orage-900 focus:ring-orange-600";
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => $class]) }}>
    {{ $value ?? $slot }}
    <x-icons.loading-indicator wire:loading.class="!block"/>
</button>