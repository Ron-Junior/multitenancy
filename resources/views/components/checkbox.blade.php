@props([
    'label' => '',
    'disabled' => false,
])

@php
    $id = $attributes->get('wire:model');
@endphp

<div>
    <x-label class="inline-flex items-center" :for="$id" :value="$label"/>
    <input class="rounded border-orange-400 text-orange-600 shadow-sm focus:ring-orange-500" id="{{$id}}" type="checkbox" />
</div>
