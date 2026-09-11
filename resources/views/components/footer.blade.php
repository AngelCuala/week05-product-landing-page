<footer id="contact">

    {{-- Newsletter bar --}}
    <div class="bg-char-light border-t border-paper/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-5 flex flex-col sm:flex-row items-center justify-between gap-3 sm:gap-4">
            <p class="text-smoke text-xs sm:text-sm italic text-center sm:text-left">"Nice flavors and presentation, though the portion was smaller than I hoped. Tasty overall."</p>
            <form class="flex items-center gap-2 shrink-0 w-full sm:w-auto" onsubmit="return false;">
                <input
                    type="email"
                    placeholder="Enter Your Email"
                    class="bg-char border border-paper/20 text-paper placeholder-smoke text-xs sm:text-sm px-3 sm:px-4 py-2 sm:py-2.5 rounded-full flex-1 sm:w-48 md:w-52 focus:outline-none focus:border-ember transition-colors"
                >
                <button type="submit"
                        class="bg-ember hover:bg-ember-light text-paper text-xs sm:text-sm font-semibold px-4 sm:px-5 py-2 sm:py-2.5 rounded-full transition-colors shadow-ember shrink-0">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    {{-- Main footer --}}
    <div class="bg-char border-t border-paper/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14 grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-8 sm:gap-10">

            {{-- Brand --}}
            <div class="col-span-2 lg:col-span-2">
                <a href="#home" class="flex items-center gap-3 mb-3 sm:mb-4">
                    <img src="{{ asset('images/logo.jpg') }}" alt="Bypass Grill" class="h-10 w-10 sm:h-12 sm:w-12 rounded-full object-cover">
                    <span class="font-display text-lg sm:text-xl">BYPASS <span class="text-ember">GRILL</span></span>
                </a>
                <p class="text-smoke text-xs sm:text-sm leading-relaxed max-w-xs">
                    Experience the joy of slow-smoked, chef-crafted meals — ribs, jerk chicken, skewers, and combos served hot, ready for pickup.
                </p>
            </div>

            {{-- Information --}}
            <div>
                <h4 class="font-display text-base tracking-wide text-paper mb-4">Information</h4>
                <ul class="space-y-3 text-sm text-smoke">
                    <li><a href="#home"     class="hover:text-ember transition-colors">About Us</a></li>
                    <li><a href="#dishes"   class="hover:text-ember transition-colors">More Search</a></li>
                    <li><a href="#testimonials" class="hover:text-ember transition-colors">Testimonial</a></li>
                    <li><a href="#contact"  class="hover:text-ember transition-colors">Event</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h4 class="font-display text-base tracking-wide text-paper mb-4">Resources</h4>
                <ul class="space-y-3 text-sm text-smoke">
                    <li><a href="#" class="hover:text-ember transition-colors">Term of Services</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">Refund Policy</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">FAQ</a></li>
                </ul>
            </div>

            {{-- Quick Links + Social --}}
            <div>
                <h4 class="font-display text-base tracking-wide text-paper mb-4">Quick Links</h4>
                <ul class="space-y-3 text-sm text-smoke mb-6">
                    <li><a href="#showcase"  class="hover:text-ember transition-colors">All Categories</a></li>
                    <li><a href="#"                      class="hover:text-ember transition-colors">Site Map</a></li>
                    <li><a href="#contact"               class="hover:text-ember transition-colors">Contact Us</a></li>
                    <li><a href="#"                      class="hover:text-ember transition-colors">Help</a></li>
                </ul>

                <h4 class="font-display text-base tracking-wide text-paper mb-3">Social Media</h4>
                <ul class="space-y-2 text-sm text-smoke">
                    <li><a href="#" class="hover:text-ember transition-colors">Instagram</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">Facebook</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">LinkedIn</a></li>
                    <li><a href="#" class="hover:text-ember transition-colors">YouTube</a></li>
                </ul>
            </div>

        </div>

        <div class="border-t border-paper/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-5 flex flex-col sm:flex-row gap-2 sm:gap-3 items-center justify-between text-xs text-smoke">
                <p>&copy; {{ date('Y') }} Bypass Grill. All rights reserved.</p>
                <p>Built with Laravel &amp; Tailwind CSS.</p>
            </div>
        </div>
    </div>

</footer>
