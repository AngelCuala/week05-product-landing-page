{{-- Hero — responsive across mobile / tablet / laptop / desktop --}}
<section id="home" class="relative bg-char-gradient overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 sm:pt-20 pb-12 sm:pb-16 text-center">

        <p class="inline-block text-ember font-display text-base sm:text-lg tracking-widest mb-3 sm:mb-4 uppercase">
            Smoked Low &amp; Served Hot
        </p>

        <h1 class="text-3xl sm:text-5xl lg:text-6xl leading-[1.08] mb-4 sm:mb-5">
            Taste the <span class="text-ember">Smoke,</span> Feel the<br class="hidden sm:block">
            Heat &amp; Live to <span class="text-corn">Eat.</span>
        </h1>

        <p class="text-smoke text-base sm:text-lg leading-relaxed max-w-2xl mx-auto mb-7 sm:mb-8 px-2">
            Slow-smoked ribs, Jamaican jerk chicken, and charred skewers — plated hot with rice and a side. Every order made-to-order, every time.
        </p>

        {{-- CTA buttons — stack on mobile, inline on sm+ --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
            <a href="#pricing"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-ember hover:bg-ember-light text-paper font-semibold px-7 py-3.5 sm:px-8 sm:py-4 rounded-full shadow-ember transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                Order Now
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                </svg>
            </a>
            <a href="#showcase"
               class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-paper/30 hover:border-corn text-paper hover:text-corn font-semibold px-7 py-3.5 sm:px-8 sm:py-4 rounded-full transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                See the Menu
            </a>
        </div>
    </div>

    {{-- Category cards — 2 cols on mobile, 4 on sm+ --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">

            @php
            $categories = [
                ['img' => 'combo-boxes.jpg',        'name' => 'Combo Boxes',       'kcal' => '700–900',  'serves' => '1 person'],
                ['img' => 'jerk-chicken-plate.jpg', 'name' => 'Jerk Chicken',      'kcal' => '550–700',  'serves' => '1 person'],
                ['img' => 'rice-combo2.jpg',         'name' => 'Monster Ribs',      'kcal' => '700–900',  'serves' => '1–2 persons'],
                ['img' => 'sides.jpg',               'name' => 'A La Carte Sides',  'kcal' => '150–300',  'serves' => 'Add-on'],
            ];
            @endphp

            @foreach ($categories as $cat)
            <a href="#showcase"
               class="group bg-char-light border border-paper/10 rounded-2xl p-3 sm:p-4 flex flex-col items-center gap-2 sm:gap-3 hover:border-ember/50 transition-all duration-300 hover:-translate-y-1">
                <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full overflow-hidden ring-2 ring-paper/10 group-hover:ring-ember/50 transition-all duration-300 shrink-0">
                    <img src="{{ asset('images/' . $cat['img']) }}" alt="{{ $cat['name'] }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="text-center">
                    <p class="font-semibold text-paper text-xs sm:text-sm leading-tight">{{ $cat['name'] }}</p>
                    <p class="text-smoke text-[10px] sm:text-xs mt-0.5 sm:mt-1">{{ $cat['kcal'] }} kcal · {{ $cat['serves'] }}</p>
                </div>
                <div class="flex items-center justify-between w-full mt-auto pt-2 border-t border-paper/10">
                    <span class="font-display text-corn text-xs sm:text-sm">₱145+</span>
                    <span class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-ember/10 text-ember grid place-items-center group-hover:bg-ember group-hover:text-paper transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14" />
                        </svg>
                    </span>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</section>
