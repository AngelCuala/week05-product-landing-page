@props([
    'icon' => 'flame',
    'title' => 'Feature title',
    'description' => 'Feature description goes here.',
])

@php
    // A tiny set of inline SVG icons so the component has zero external icon
    // dependency. Each one is drawn from the grill/smokehouse world rather
    // than a generic icon-kit glyph.
    $icons = [
        'flame' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 3c1 2.5-1 3.8-1 6 0 1.7 1.3 3 3 3s3-1.3 3-3c1.8 1.6 3 4 3 6.2A6.2 6.2 0 0 1 13.8 21 6.2 6.2 0 0 1 7.6 14.8c0-2 .9-3.6 2-5 .6 1 1.8 1.6 2.4.6.6-1-1-2.7 0-7.4Z" />',
        'clock' => '<circle cx="12" cy="12" r="8.25" stroke-linecap="round" stroke-linejoin="round" /><path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5V12l3 2" />',
        'skewer' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 20 20 4M7 9l2 2M11 5l2 2M13 13l2 2M9 17l2 2" />',
        'bowl' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16M4 12a8 8 0 0 0 16 0M9 12V8m6 4V8M12 12V6" />',
        'sauce' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6l1 4H8l1-4Z M6 7h12l-1.2 12.2A2 2 0 0 1 14.8 21H9.2a2 2 0 0 1-2-1.8L6 7Z" />',
        'bag' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 8h12l1 12.5a1.5 1.5 0 0 1-1.5 1.5H6.5A1.5 1.5 0 0 1 5 20.5L6 8Z M9 8V6a3 3 0 0 1 6 0v2" />',
    ];
    $path = $icons[$icon] ?? $icons['flame'];
@endphp

<div {{ $attributes->merge(['class' => 'group p-7 rounded-2xl bg-char-light border border-paper/10 hover:border-ember/50 transition-colors duration-300']) }}>
    <div class="w-12 h-12 rounded-xl bg-ember/15 text-ember grid place-items-center mb-5 group-hover:bg-ember group-hover:text-paper transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6">
            {!! $path !!}
        </svg>
    </div>
    <h3 class="text-xl mb-2 font-display tracking-wide">{{ $title }}</h3>
    <p class="text-smoke text-sm leading-relaxed">{{ $description }}</p>
</div>
