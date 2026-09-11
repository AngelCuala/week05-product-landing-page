@extends('layouts.app')

@section('title', 'Menu — Bypass Grill')
@section('meta_description', 'Browse the full Bypass Grill menu. Combos, a la carte skewers, rice and sides. Slow-smoked ribs, jerk chicken, liempo, and more.')

@section('content')

    {{-- ===== HEADER ===== --}}
    <section class="max-w-7xl mx-auto px-5 sm:px-8 pt-16 pb-10">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-smoke hover:text-paper transition-colors text-sm mb-8">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Back to home
        </a>
        <h1 class="text-4xl sm:text-5xl mb-3">The Menu</h1>
        <p class="text-smoke text-lg">Everything on the grill — combos, a la carte, and sides.</p>
    </section>

    {{-- ===== MENU IMAGES ===== --}}
    <section class="max-w-7xl mx-auto px-5 sm:px-8 pb-20 lg:pb-28">
        <div class="grid lg:grid-cols-2 gap-6 mb-6">

            {{-- Combos board --}}
            <div class="rounded-3xl overflow-hidden border border-paper/10">
                <div class="bg-char-light px-6 py-4 border-b border-paper/10">
                    <h2 class="text-xl font-display tracking-wide">Combo Menu</h2>
                    <p class="text-smoke text-sm mt-1">Each combo includes 1 rice and 1 side.</p>
                </div>
                <img
                    src="{{ asset('images/menu-combos.jpg') }}"
                    alt="Bypass Grill combo menu board showing Pork Monster Ribs, Grilled Hungarian Sausage, Rustic Chicken Skewers, Jamaican Jerk Chicken, and Grilled Liempo"
                    class="w-full object-cover"
                >
            </div>

            {{-- A la carte board --}}
            <div class="rounded-3xl overflow-hidden border border-paper/10">
                <div class="bg-char-light px-6 py-4 border-b border-paper/10">
                    <h2 class="text-xl font-display tracking-wide">A La Carte & Sides</h2>
                    <p class="text-smoke text-sm mt-1">Add rice, mashed potato, or buttered corn to any order.</p>
                </div>
                <img
                    src="{{ asset('images/menu-alacarte.jpg') }}"
                    alt="Bypass Grill a la carte menu with rice, mashed potato, and buttered corn add-ons"
                    class="w-full object-cover"
                >
            </div>

        </div>

        {{-- Takeout box photo + highlights --}}
        <div class="grid lg:grid-cols-5 gap-6">

            <div class="lg:col-span-2 rounded-3xl overflow-hidden border border-paper/10">
                <img
                    src="{{ asset('images/combo-boxes.jpg') }}"
                    alt="Two Bypass Grill takeout boxes with skewers, ribs, and buttered corn, ready for pickup"
                    class="w-full h-full object-cover aspect-square"
                >
            </div>

            <div class="lg:col-span-3 rounded-3xl bg-char-light border border-paper/10 p-8 lg:p-10 flex flex-col justify-center">
                <h3 class="text-2xl mb-6">Combo Prices</h3>
                <ul class="space-y-5">
                    <li class="flex items-start gap-4">
                        <span class="font-display text-corn text-2xl w-16 shrink-0">₱185</span>
                        <div>
                            <p class="text-paper font-semibold">Pork Monster Ribs</p>
                            <p class="text-smoke text-sm">Slow-smoked, glazed in smoky BBQ sauce. ~700–900 kcal.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="font-display text-corn text-2xl w-16 shrink-0">₱165</span>
                        <div>
                            <p class="text-paper font-semibold">Jamaican Jerk Chicken</p>
                            <p class="text-smoke text-sm">Bone-in leg quarter, island-spiced and grilled to order. ~550–700 kcal.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="font-display text-corn text-2xl w-16 shrink-0">₱165</span>
                        <div>
                            <p class="text-paper font-semibold">Grilled Liempo</p>
                            <p class="text-smoke text-sm">Crispy-edged pork belly, charred on the grates.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="font-display text-corn text-2xl w-16 shrink-0">₱145</span>
                        <div>
                            <p class="text-paper font-semibold">Rustic Chicken Skewers</p>
                            <p class="text-smoke text-sm">Two grilled chicken skewers with bell peppers. ~460–560 kcal.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="font-display text-corn text-2xl w-16 shrink-0">₱120</span>
                        <div>
                            <p class="text-paper font-semibold">Grilled Hungarian Sausage</p>
                            <p class="text-smoke text-sm">Smoky sausage, sliced and charred.</p>
                        </div>
                    </li>
                </ul>

                <p class="text-smoke text-xs mt-6">All combos come with 1 rice and 1 side (mashed potato, buttered corn, or coleslaw).</p>
            </div>

        </div>
    </section>

    {{-- ===== CTA ===== --}}
    <section class="max-w-7xl mx-auto px-5 sm:px-8 pb-20 lg:pb-28">
        <div class="relative rounded-3xl bg-ember/10 border border-ember/40 px-8 py-14 lg:px-16 lg:py-16 overflow-hidden text-center">
            <div class="absolute -right-16 -top-16 w-64 h-64 bg-ember/20 blur-3xl rounded-full"></div>
            <div class="relative max-w-xl mx-auto">
                <h2 class="text-3xl sm:text-4xl mb-4">Ready to order?</h2>
                <p class="text-smoke text-lg mb-8">Head back to the home page to place your order or contact us about catering.</p>
                <a href="{{ route('home') }}#pricing"
                   class="inline-block bg-ember hover:bg-ember-light text-paper font-semibold px-8 py-3 rounded-xl transition-colors">
                    Order a Combo
                </a>
            </div>
        </div>
    </section>

@endsection
