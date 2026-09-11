<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bypass Grill — Smoked Low, Served Hot')</title>
    <meta name="description" content="@yield('meta_description', 'Bypass Grill is a smoked ribs and grill shop serving jerk chicken, monster ribs, liempo, and skewers with rice combos. Order ahead, dine hot.')">

    {{-- Fonts: a condensed signage-style display face for headlines, paired with a clean
         humanist sans for body copy, so the page reads like grill-shop signage rather than a generic SaaS template. --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{--
        This project ships with a full Tailwind + Vite build pipeline (see tailwind.config.js,
        vite.config.js, resources/css/app.css). To use the compiled build in production, swap
        the CDN script below for: @vite('resources/css/app.css')
        The CDN + inline config below lets the page render immediately without a node build step.
    --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        char: { DEFAULT: '#1B1410', light: '#2A211B', soft: '#3A2E25' },
                        ember: { DEFAULT: '#C4531A', light: '#E07A3C', dark: '#8F3B10' },
                        corn: { DEFAULT: '#E8B23D', light: '#F2CD73' },
                        sauce: { DEFAULT: '#6B1E1E', light: '#8C2C2C' },
                        paper: '#F4ECD8',
                        smoke: '#B8A990',
                    },
                    fontFamily: {
                        display: ['"Staatliches"', 'cursive'],
                        body: ['"Work Sans"', 'sans-serif'],
                    },
                    boxShadow: {
                        ember: '0 12px 30px -10px rgba(196, 83, 26, 0.45)',
                    },
                },
            },
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body { background-color: #1B1410; }
        .bg-char-gradient {
            background: radial-gradient(120% 120% at 15% 0%, #2A211B 0%, #1B1410 55%, #140F0C 100%);
        }
        :focus-visible { outline: 2px solid #E8B23D; outline-offset: 3px; }
    </style>
</head>
<body class="bg-char text-paper font-body antialiased">

    <x-navbar />

    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
</body>
</html>
