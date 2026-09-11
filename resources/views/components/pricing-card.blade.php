@props([
    'name' => 'Plan',
    'price' => '0',
    'unit' => 'combo',
    'description' => '',
    'features' => [],
    'featured' => false,
    'cta' => 'Order Now',
])

<div {{ $attributes->merge([
        'class' => 'relative flex flex-col rounded-3xl p-8 border transition-transform duration-300 hover:-translate-y-1 '
            . ($featured
                ? 'bg-ember/10 border-ember shadow-ember lg:scale-105'
                : 'bg-char-light border-paper/10')
    ]) }}
>
    @if ($featured)
        <span class="absolute -top-3 left-8 bg-corn text-char text-xs font-bold px-3 py-1 rounded-full">
            Most Ordered
        </span>
    @endif

    <h3 class="font-display text-2xl tracking-wide mb-1">{{ $name }}</h3>
    <p class="text-smoke text-sm mb-6">{{ $description }}</p>

    <div class="flex items-end gap-1 mb-7">
        <span class="text-4xl font-display text-corn">₱{{ $price }}</span>
        <span class="text-smoke text-sm pb-1">/ {{ $unit }}</span>
    </div>

    <ul class="space-y-3 mb-9 flex-1">
        @foreach ($features as $feature)
            <li class="flex items-start gap-3 text-sm text-paper/90">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0 text-ember" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button href="#contact" :variant="$featured ? 'primary' : 'secondary'" class="w-full text-center">
        {{ $cta }}
    </x-button>
</div>
