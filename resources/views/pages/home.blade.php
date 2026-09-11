@extends('layouts.app')

@section('title', 'Bypass Grill — Smoked Ribs, Jerk Chicken & Grill Combos')
@section('meta_description', 'Slow-smoked ribs, Jamaican jerk chicken, grilled liempo and skewers, plated with rice and a side. Order Bypass Grill combos for pickup or delivery.')

@section('content')

    {{-- ===================== HERO ===================== --}}
    <x-hero />

    {{-- ===================== ABOUT ===================== --}}
    <section id="about" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image blob — hidden on mobile to save vertical space, shown tablet+ --}}
            <div class="relative flex items-center justify-center order-2 lg:order-1 hidden sm:flex">
                <div class="absolute w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 bg-ember rounded-full opacity-90"></div>
                <div class="relative w-56 h-56 sm:w-64 sm:h-64 md:w-72 md:h-72 rounded-full overflow-hidden ring-4 ring-ember/30 z-10">
                    <img src="{{ asset('images/jerk-chicken-plate.jpg') }}" alt="Bypass Grill jerk chicken plate" class="w-full h-full object-cover">
                </div>
                <div class="absolute top-4 left-4 grid grid-cols-4 gap-2 z-20 opacity-60">
                    @for ($i = 0; $i < 16; $i++)<span class="w-1.5 h-1.5 rounded-full bg-paper/60"></span>@endfor
                </div>
                <div class="absolute bottom-4 right-4 grid grid-cols-4 gap-2 z-20 opacity-60">
                    @for ($i = 0; $i < 16; $i++)<span class="w-1.5 h-1.5 rounded-full bg-paper/60"></span>@endfor
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl mb-3 sm:mb-4">About Bypass Grill</h2>
                <p class="text-smoke text-sm sm:text-base leading-relaxed mb-6 sm:mb-8">
                    Deliciously crafted plates celebrating the flavors, textures, and joy of real grill-house food — made over live fire, not a microwave.
                </p>
                <div class="space-y-4 mb-6 sm:mb-8">
                    <div class="flex items-center gap-3 sm:gap-4 p-3 sm:p-4 rounded-2xl bg-char-light border border-paper/10 hover:border-ember/40 transition-colors">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('images/rice-combo2.jpg') }}" alt="Monster Ribs" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold text-paper text-sm sm:text-base">Pork Monster Ribs</p>
                            <p class="text-smoke text-xs sm:text-sm">Slow-smoked ribs with a wholesome BBQ glaze for a real grill experience.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 sm:gap-4 p-3 sm:p-4 rounded-2xl bg-char-light border border-paper/10 hover:border-ember/40 transition-colors">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('images/jerk-chicken-plate.jpg') }}" alt="Jerk Chicken" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="font-semibold text-paper text-sm sm:text-base">Jamaican Jerk Chicken</p>
                            <p class="text-smoke text-xs sm:text-sm">Island-spiced leg quarter grilled to order for a healthier lifestyle.</p>
                        </div>
                    </div>
                </div>
                <a href="#showcase"
                   class="inline-flex items-center gap-2 bg-ember hover:bg-ember-light text-paper font-semibold px-6 sm:px-7 py-3 rounded-full shadow-ember transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                    See More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ===================== MOST POPULAR ===================== --}}
    <section id="popular" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
        <div class="text-center mb-10 sm:mb-14">
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl tracking-wide mb-2 sm:mb-3">MOST POPULAR FOOD</h2>
            <p class="text-smoke max-w-lg mx-auto text-xs sm:text-sm px-4">
                Wondering what to order first? Our regulars always start here — the most-ordered plates off the grill.
            </p>
        </div>

        @php
        $popular = [
            ['img' => 'jerk-chicken-plate.jpg', 'name' => 'Jerk Chicken Meal', 'rating' => '4.8', 'offset' => false],
            ['img' => 'combo-boxes.jpg',         'name' => 'Skewers',           'rating' => '4.8', 'offset' => true],
            ['img' => 'rice-combo3.jpg',          'name' => 'Rice Combos',       'rating' => '4.8', 'offset' => false],
            ['img' => 'rice-combo2.jpg',          'name' => 'Monster Ribs',      'rating' => '4.8', 'offset' => true],
        ];
        @endphp

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 items-end">
            @foreach ($popular as $item)
            <a href="#showcase" class="group flex flex-col items-center gap-2 sm:gap-3 {{ $item['offset'] ? 'lg:mt-10' : '' }}">
                <div class="relative w-full">
                    <div class="absolute top-2 right-2 sm:top-3 sm:right-3 z-10 w-7 h-7 sm:w-9 sm:h-9 rounded-full bg-ember text-paper grid place-items-center shadow-ember group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 sm:w-4 sm:h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M7 7h10v10" />
                        </svg>
                    </div>
                    <div class="mx-auto w-32 h-32 sm:w-40 sm:h-40 lg:w-48 lg:h-48 rounded-full overflow-hidden border-4 border-char-light group-hover:border-ember/40 transition-colors duration-300 shadow-xl">
                        <img src="{{ asset('images/' . $item['img']) }}" alt="{{ $item['name'] }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                </div>
                <div class="text-center">
                    <p class="font-semibold text-paper text-xs sm:text-sm">{{ $item['name'] }}</p>
                    <p class="text-corn text-xs sm:text-sm flex items-center justify-center gap-1 mt-0.5 sm:mt-1">
                        {{ $item['rating'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 sm:w-4 sm:h-4 fill-corn" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    {{-- ===================== FEATURES ===================== --}}
    <section id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
        <div class="text-center mb-10 sm:mb-14">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl mb-2 sm:mb-3">What makes it worth the drive</h2>
            <p class="text-smoke max-w-lg mx-auto text-xs sm:text-sm px-4">
                Every plate goes through the same routine: hours over smoke, a hand-brushed glaze, and a scoop of buttered rice — no shortcuts, no microwave.
            </p>
        </div>

        {{-- 1 col mobile → 2 col tablet → 3 col desktop --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <x-feature-card icon="clock"
                title="Low & Slow Smoking"
                description="Our ribs spend hours over real smoke until the meat pulls clean off the bone — no shortcuts, no pressure cooker." />
            <x-feature-card icon="sauce"
                title="Hand-Brushed BBQ Glaze"
                description="A smoky-sweet house sauce, brushed on layer by layer so it caramelizes instead of just coating the meat." />
            <x-feature-card icon="flame"
                title="Charred, Not Burnt"
                description="Jerk chicken and liempo get real char on the grill grates for bold flavor, while staying juicy inside." />
            <x-feature-card icon="skewer"
                title="Skewers Grilled to Order"
                description="Chicken and Hungarian sausage skewers go on the fire only after you order — never held under a heat lamp." />
            <x-feature-card icon="bowl"
                title="Combos Built to Fill You Up"
                description="Every rice-and-side combo is portioned to be a full meal on its own, not a starter or a snack." />
            <x-feature-card icon="bag"
                title="Ready for Pickup Fast"
                description="Order ahead and your combo is boxed hot and ready when you walk in — no long counter wait, no cold food." />
        </div>
    </section>

    {{-- ===================== PRODUCT SHOWCASE ===================== --}}
    <section id="showcase" class="bg-char-light border-y border-paper/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
            <div class="max-w-2xl mb-10 sm:mb-14">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl mb-3 sm:mb-4">A closer look at the plate</h2>
                <p class="text-smoke text-sm sm:text-lg leading-relaxed">
                    From the counter menu to the box you take home — here's what actually shows up on the grill and in your bag.
                </p>
            </div>

            {{-- Top row: stacked on mobile, 2-col on lg --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 mb-4 sm:mb-6">
                <button onclick="openMenuModal()"
                        class="rounded-2xl sm:rounded-3xl overflow-hidden border border-paper/10 group block relative aspect-[4/3] w-full cursor-pointer">
                    <img src="{{ asset('images/menu-combos.jpg') }}" alt="Bypass Grill combo menu"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-char/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-ember text-paper text-sm font-semibold px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl flex items-center gap-2">
                            View Full Menu
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </button>

                <button onclick="openMenuModal()"
                        class="rounded-2xl sm:rounded-3xl overflow-hidden border border-paper/10 group block relative aspect-[4/3] w-full cursor-pointer">
                    <img src="{{ asset('images/menu-alacarte.jpg') }}" alt="Bypass Grill a la carte menu"
                         class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-char/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-ember text-paper text-sm font-semibold px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl flex items-center gap-2">
                            View Full Menu
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </button>
            </div>

            {{-- Bottom row: stacked on mobile/tablet, side-by-side on lg --}}
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-4 sm:gap-6">
                <button onclick="openMenuModal()"
                        class="lg:col-span-2 rounded-2xl sm:rounded-3xl overflow-hidden border border-paper/10 group block relative w-full cursor-pointer">
                    <img src="{{ asset('images/combo-boxes.jpg') }}" alt="Bypass Grill takeout combo boxes"
                         class="w-full object-cover aspect-[4/3] sm:aspect-square group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-char/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-ember text-paper text-sm font-semibold px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl flex items-center gap-2">
                            View Full Menu
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </button>

                <div class="lg:col-span-3 rounded-2xl sm:rounded-3xl bg-char p-6 sm:p-8 lg:p-10 flex flex-col justify-center border border-paper/10">
                    <h3 class="text-xl sm:text-2xl mb-4 sm:mb-6">Key Highlights</h3>
                    <ul class="space-y-4 sm:space-y-5">
                        <li class="flex gap-3 sm:gap-4">
                            <span class="font-display text-corn text-lg sm:text-xl w-12 sm:w-14 shrink-0">₱185</span>
                            <p class="text-smoke text-xs sm:text-sm leading-relaxed">
                                <span class="text-paper font-semibold">Pork Monster Ribs combo</span> — the biggest plate on the menu, rice and a side included, ~700–900 kcal.
                            </p>
                        </li>
                        <li class="flex gap-3 sm:gap-4">
                            <span class="font-display text-corn text-lg sm:text-xl w-12 sm:w-14 shrink-0">₱165</span>
                            <p class="text-smoke text-xs sm:text-sm leading-relaxed">
                                <span class="text-paper font-semibold">Jamaican Jerk Chicken combo</span> — island-spiced leg quarter, grilled to order. ~550–700 kcal.
                            </p>
                        </li>
                        <li class="flex gap-3 sm:gap-4">
                            <span class="font-display text-corn text-lg sm:text-xl w-12 sm:w-14 shrink-0">₱65</span>
                            <p class="text-smoke text-xs sm:text-sm leading-relaxed">
                                <span class="text-paper font-semibold">Rustic Chicken Skewers</span> — sold per stick, build a mixed box for the table.
                            </p>
                        </li>
                        <li class="flex gap-3 sm:gap-4">
                            <span class="font-display text-corn text-lg sm:text-xl w-12 sm:w-14 shrink-0">₱45</span>
                            <p class="text-smoke text-xs sm:text-sm leading-relaxed">
                                <span class="text-paper font-semibold">Add-on Sides</span> — garlic rice, mashed potato, buttered corn, or coleslaw.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== PRICING ===================== --}}
    <section id="pricing" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
        <div class="text-center mb-10 sm:mb-14">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl mb-2 sm:mb-3">Combos, priced for one full meal</h2>
            <p class="text-smoke max-w-lg mx-auto text-xs sm:text-sm px-4">
                Every combo below comes with one rice and one side. Mix in a la carte skewers or sausage for the table.
            </p>
        </div>

        {{-- 1 col mobile → 3 col desktop --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 items-stretch">
            <x-pricing-card
                name="Starter Combo"
                price="145"
                unit="combo"
                description="Perfect entry point — marinated chicken skewers charred with bell peppers."
                :features="['Two grilled chicken skewers','1 rice + 1 side included','~460–560 kcal','Ready in under 10 minutes','Great for light appetites']"
                cta="Order Starter" />

            <x-pricing-card
                name="Professional Combo"
                price="165"
                unit="combo"
                description="Our most-ordered — a full jerk chicken leg quarter, grilled to order."
                :featured="true"
                :features="['Bone-in jerk chicken leg','1 rice + 1 side included','~550–700 kcal','Island spice blend','Most-ordered combo']"
                cta="Order Professional" />

            <x-pricing-card
                name="Enterprise Combo"
                price="185"
                unit="combo"
                description="The full experience — slow-smoked monster ribs glazed in smoky BBQ sauce."
                :features="['Full smoked rib portion','1 rice + 1 side included','~700–900 kcal','House BBQ glaze','Best for big appetites']"
                cta="Order Enterprise" />
        </div>

        <p class="text-smoke text-xs sm:text-sm mt-6 sm:mt-8 text-center px-4">
            Want a lighter plate? Grilled Liempo (₱165) and Grilled Hungarian Sausage (₱120) combos are also on the counter menu.
        </p>
    </section>

    {{-- ===================== TESTIMONIALS ===================== --}}
    <section id="testimonials" class="bg-char-light border-y border-paper/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
            <div class="text-center mb-10 sm:mb-14">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl mb-2 sm:mb-3">What regulars keep coming back for</h2>
                <p class="text-smoke max-w-lg mx-auto text-xs sm:text-sm px-4">Real reviews from real customers who keep coming back to the grill.</p>
            </div>

            {{-- 1 col mobile → 3 col md+ --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
                @php
                $testimonials = [
                    ['name' => 'Samantha Osmillo',    'position' => 'Student',                  'initials' => 'SO', 'img' => 'rice-combo2.jpg',        'rating' => 5, 'review' => 'The Monster Ribs combo is the only lunch that actually lasts me through a long shift. The meat really does fall off the bone — no exaggeration.'],
                    ['name' => 'Diana Angela Dogayo', 'position' => 'Student, Regular Customer', 'initials' => 'DD', 'img' => 'jerk-chicken-plate.jpg', 'rating' => 5, 'review' => 'Their jerk chicken has real char and real spice, not just a sweet glaze. Best version I\'ve had outside of a specialty spot. Highly recommended!'],
                    ['name' => 'Trisha Mae Tepait',   'position' => 'Student',                  'initials' => 'TT', 'img' => 'combo-boxes.jpg',        'rating' => 5, 'review' => 'Mabilis lutuin, mainit pa pag-abot sa bahay. Sulit yung skewers pag sinabay sa rice combo. Hindi na ako nag-aatubiling bumalik.'],
                ];
                @endphp

                @foreach ($testimonials as $t)
                <figure class="bg-char rounded-2xl overflow-hidden border border-paper/10 hover:border-ember/30 transition-all duration-300 hover:-translate-y-1 flex flex-col">
                    <div class="relative">
                        <img src="{{ asset('images/' . $t['img']) }}" alt="{{ $t['name'] }}"
                             class="w-full h-36 sm:h-44 object-cover">
                        <div class="absolute -bottom-5 left-4 sm:left-5 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-ember ring-2 ring-char grid place-items-center font-display text-paper text-xs sm:text-sm z-10">
                            {{ $t['initials'] }}
                        </div>
                    </div>
                    <div class="p-5 sm:p-6 pt-7 sm:pt-8 flex flex-col flex-1">
                        <div class="flex gap-0.5 mb-2 sm:mb-3">
                            @for ($s = 0; $s < 5; $s++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 sm:w-4 sm:h-4 {{ $s < $t['rating'] ? 'fill-corn' : 'fill-paper/20' }}" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            @endfor
                        </div>
                        <blockquote class="text-paper/90 text-xs sm:text-sm leading-relaxed flex-1 mb-4 sm:mb-5">
                            "{{ $t['review'] }}"
                        </blockquote>
                        <figcaption class="pt-3 sm:pt-4 border-t border-paper/10">
                            <p class="font-semibold text-paper text-xs sm:text-sm">{{ $t['name'] }}</p>
                            <p class="text-smoke text-[10px] sm:text-xs mt-0.5">{{ $t['position'] }}</p>
                        </figcaption>
                    </div>
                </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================== CALL TO ACTION ===================== --}}
    <section id="cta" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
        <div class="relative rounded-2xl sm:rounded-3xl bg-ember/10 border border-ember/40 px-6 sm:px-10 lg:px-16 py-12 sm:py-16 lg:py-20 overflow-hidden text-center">
            <div class="absolute -right-16 -top-16 w-48 sm:w-64 h-48 sm:h-64 bg-ember/20 blur-3xl rounded-full pointer-events-none"></div>
            <div class="absolute -left-16 -bottom-16 w-48 sm:w-64 h-48 sm:h-64 bg-corn/10 blur-3xl rounded-full pointer-events-none"></div>

            <div class="relative max-w-2xl mx-auto">
                <p class="text-ember font-display tracking-widest text-xs sm:text-sm uppercase mb-2 sm:mb-3">Hungry already?</p>
                <h2 class="text-2xl sm:text-4xl lg:text-5xl mb-4 sm:mb-5">The grill's on.<br class="hidden sm:block"> Ready when you are.</h2>
                <p class="text-smoke text-sm sm:text-lg leading-relaxed mb-7 sm:mb-10 px-2">
                    Register for rewards, contact us about catering for your next event, or start with a free tasting on your first order.
                </p>
                <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4">
                    <a href="#contact"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-ember hover:bg-ember-light text-paper font-semibold px-7 sm:px-8 py-3.5 sm:py-4 rounded-full shadow-ember transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                        Register for Rewards
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12" />
                        </svg>
                    </a>
                    <a href="#contact"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 border-2 border-paper/30 hover:border-corn text-paper hover:text-corn font-semibold px-7 sm:px-8 py-3.5 sm:py-4 rounded-full transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== MENU MODAL ===================== --}}
    <div id="menu-modal"
         class="fixed inset-0 z-[100] flex items-center justify-center p-3 sm:p-4 hidden"
         role="dialog" aria-modal="true" aria-label="Full Menu">

        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeMenuModal()"></div>

        <div class="relative z-10 w-full max-w-4xl max-h-[90vh] overflow-y-auto bg-char rounded-2xl sm:rounded-3xl border border-paper/10 shadow-2xl
                    opacity-0 scale-95 transition-all duration-300" id="menu-modal-panel">

            <div class="sticky top-0 bg-char/95 backdrop-blur flex items-center justify-between px-4 sm:px-6 py-3 sm:py-4 border-b border-paper/10 rounded-t-2xl sm:rounded-t-3xl z-10">
                <h2 class="font-display text-xl sm:text-2xl tracking-wide">Full Menu</h2>
                <button onclick="closeMenuModal()"
                        class="w-8 h-8 sm:w-9 sm:h-9 rounded-full border border-paper/20 grid place-items-center text-smoke hover:text-paper hover:border-ember transition-colors"
                        aria-label="Close menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Stack on mobile, 2-col on sm+ --}}
            <div class="p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                <div class="rounded-xl sm:rounded-2xl overflow-hidden border border-paper/10">
                    <div class="bg-char-light px-4 py-3 border-b border-paper/10">
                        <p class="font-display text-base sm:text-lg tracking-wide">Combo Menu</p>
                        <p class="text-smoke text-xs mt-0.5">Includes 1 rice + 1 side</p>
                    </div>
                    <img src="{{ asset('images/menu-combos.jpg') }}" alt="Bypass Grill combo menu" class="w-full object-cover">
                </div>
                <div class="rounded-xl sm:rounded-2xl overflow-hidden border border-paper/10">
                    <div class="bg-char-light px-4 py-3 border-b border-paper/10">
                        <p class="font-display text-base sm:text-lg tracking-wide">A La Carte & Sides</p>
                        <p class="text-smoke text-xs mt-0.5">Add-ons and individual items</p>
                    </div>
                    <img src="{{ asset('images/menu-alacarte.jpg') }}" alt="Bypass Grill a la carte menu" class="w-full object-cover">
                </div>
            </div>

            <div class="px-4 sm:px-6 pb-5 sm:pb-6 flex justify-center">
                <button onclick="closeMenuModal(); document.getElementById('pricing').scrollIntoView({behavior:'smooth'})"
                        class="inline-flex items-center gap-2 bg-ember hover:bg-ember-light text-paper font-semibold px-7 sm:px-8 py-3 rounded-full shadow-ember transition-all hover:-translate-y-0.5 text-sm sm:text-base">
                    Order a Combo
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5-5 5M6 12h12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    function openMenuModal() {
        const modal = document.getElementById('menu-modal');
        const panel = document.getElementById('menu-modal-panel');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(() => requestAnimationFrame(() => {
            panel.classList.remove('opacity-0', 'scale-95');
            panel.classList.add('opacity-100', 'scale-100');
        }));
    }

    function closeMenuModal() {
        const modal = document.getElementById('menu-modal');
        const panel = document.getElementById('menu-modal-panel');
        panel.classList.remove('opacity-100', 'scale-100');
        panel.classList.add('opacity-0', 'scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }

    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenuModal(); });
</script>
@endpush
