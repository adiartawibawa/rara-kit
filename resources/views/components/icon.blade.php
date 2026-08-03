@props(['name'])

@php
    // Path ke folder SVG
    $filePath = resource_path("svg/{$name}.svg");
    $svg = file_exists($filePath) ? file_get_contents($filePath) : null;

    // Set default class jika tidak didefinisikan saat pemanggilan
    $attributes = $attributes->merge(['class' => 'w-5 h-5']);

    // Menyisipkan $attributes (seperti class, stroke, fill) ke tag <svg>
    if ($svg) {
        $svg = preg_replace('/<svg/', '<svg ' . $attributes, $svg, 1);
    }
@endphp

@if ($svg)
    {!! $svg !!}
@else
    {{-- Fallback jika file SVG tidak ditemukan --}}
    <!-- Icon {{ $name }} not found -->
@endif
