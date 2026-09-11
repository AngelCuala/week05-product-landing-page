@props([
    'name' => 'Customer name',
    'position' => 'Regular customer',
    'review' => '',
    'initials' => 'BG',
])

<figure {{ $attributes->merge(['class' => 'p-8 rounded-2xl bg-char-light border border-paper/10 flex flex-col h-full']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-ember/40 mb-4" fill="currentColor" viewBox="0 0 32 32">
        <path d="M9.3 20.6c-1.9 0-3.4-.6-4.5-1.9C3.6 17.4 3 15.8 3 13.9c0-2.1.7-4 2-5.8 1.4-1.8 3.2-3.2 5.5-4.2l1.3 2.1c-1.6.8-2.9 1.8-3.8 3-.9 1.1-1.4 2.2-1.5 3.3.4-.2.9-.3 1.5-.3 1.3 0 2.4.4 3.2 1.3.9.8 1.3 1.9 1.3 3.2 0 1.3-.4 2.4-1.3 3.3-.8.9-1.9 1.3-3.2 1.3Zm14 0c-1.9 0-3.4-.6-4.5-1.9-1.2-1.3-1.8-2.9-1.8-4.8 0-2.1.7-4 2-5.8 1.4-1.8 3.2-3.2 5.5-4.2l1.3 2.1c-1.6.8-2.9 1.8-3.8 3-.9 1.1-1.4 2.2-1.5 3.3.4-.2.9-.3 1.5-.3 1.3 0 2.4.4 3.2 1.3.9.8 1.3 1.9 1.3 3.2 0 1.3-.4 2.4-1.3 3.3-.8.9-1.9 1.3-3.2 1.3Z"/>
    </svg>

    <blockquote class="text-paper/90 leading-relaxed flex-1">
        “{{ $review }}”
    </blockquote>

    <figcaption class="flex items-center gap-3 mt-7 pt-6 border-t border-paper/10">
        <span class="w-11 h-11 rounded-full bg-ember/20 text-ember font-display grid place-items-center text-sm">
            {{ $initials }}
        </span>
        <div>
            <p class="font-semibold text-paper text-sm">{{ $name }}</p>
            <p class="text-smoke text-xs">{{ $position }}</p>
        </div>
    </figcaption>
</figure>
