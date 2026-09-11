<header class="sticky top-0 z-50 bg-char/95 backdrop-blur border-b border-paper/10">
    <nav class="max-w-7xl mx-auto px-5 sm:px-8 h-20 flex items-center justify-between gap-6">

        {{-- Logo --}}
        <a href="#home" class="flex items-center gap-3 shrink-0" aria-label="Bypass Grill — Home">
            <img src="{{ asset('images/logo.jpg') }}" alt="Bypass Grill" class="h-12 w-12 rounded-full object-cover">
            <span class="font-display text-xl leading-none hidden sm:block">
                BYPASS <span class="text-ember">GRILL</span>
            </span>
        </a>

        {{-- Desktop links --}}
        <ul class="hidden lg:flex items-center gap-8 text-sm font-medium text-smoke">
            <li><a href="#home"         class="hover:text-paper transition-colors">Home</a></li>
            <li><a href="#showcase"     class="hover:text-paper transition-colors">Menu</a></li>
            <li><a href="#features"     class="hover:text-paper transition-colors">Features</a></li>
            <li><a href="#contact"      class="hover:text-paper transition-colors">Contact Us</a></li>
        </ul>

        {{-- Desktop actions --}}
        <div class="hidden lg:flex items-center gap-3 shrink-0">
            <a href="#contact"
               class="px-5 py-2 text-sm font-semibold text-paper border border-paper/20 rounded-full hover:border-ember hover:text-ember transition-colors">
                Login
            </a>
            <a href="#pricing"
               class="px-5 py-2 text-sm font-semibold bg-ember text-paper rounded-full hover:bg-ember-light transition-colors shadow-ember">
                Order Now
            </a>
        </div>

        {{-- Mobile toggle --}}
        <button
            type="button"
            id="mobile-toggle"
            onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
            class="lg:hidden grid place-items-center w-10 h-10 rounded-full border border-paper/20 text-paper"
            aria-label="Toggle menu"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden lg:hidden border-t border-paper/10 bg-char px-5 py-6">
        <ul class="flex flex-col gap-5 text-sm font-medium text-smoke">
            <li><a href="#home"     class="hover:text-paper">Home</a></li>
            <li><a href="#showcase" class="hover:text-paper">Menu</a></li>
            <li><a href="#features" class="hover:text-paper">Features</a></li>
            <li><a href="#contact"  class="hover:text-paper">Contact Us</a></li>
        </ul>
        <div class="flex items-center gap-3 mt-6">
            <a href="#contact"
               class="flex-1 text-center px-5 py-2.5 text-sm font-semibold text-paper border border-paper/20 rounded-full">
                Login
            </a>
            <a href="#pricing"
               class="flex-1 text-center px-5 py-2.5 text-sm font-semibold bg-ember text-paper rounded-full">
                Order Now
            </a>
        </div>
    </div>
</header>
