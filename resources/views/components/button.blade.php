@props([
    'href' => '#',
    'variant' => 'primary', // primary | secondary | ghost
    'size' => 'md',         // sm | md | lg
])

@php
    $base = 'inline-flex items-center justify-center gap-2 font-body font-semibold rounded-full transition duration-200 ease-out';

    $variants = [
        'primary'   => 'bg-ember text-paper hover:bg-ember-light shadow-ember hover:shadow-lg hover:-translate-y-0.5',
        'secondary' => 'bg-transparent text-paper border-2 border-paper/30 hover:border-corn hover:text-corn',
        'ghost'     => 'bg-transparent text-corn hover:text-corn-light underline underline-offset-4 decoration-corn/40',
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']);
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
