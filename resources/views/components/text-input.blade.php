@props([
    'label' => '',
    'disabled' => false,
])

@php
    $id = $attributes->get('wire:model');
@endphp

<div class="space-y-2">
    <x-label :for="$id" :value="$label"/>
    <input 
        id="{{$id}}" 
        {{ $disabled ? 'disabled' : '' }} 
        {!! $attributes->merge([
            'class' => 'w-full border-orange-400 bg-white focus:border-orange-600 focus:ring-orange-600 rounded-md shadow-sm'
        ]) !!} 
    />
    <x-input-error class="!mt-0" :messages="$errors->get($id)"/>
</div>
