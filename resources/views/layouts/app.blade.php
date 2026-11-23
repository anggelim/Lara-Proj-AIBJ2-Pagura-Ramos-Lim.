<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Brew & Bloom Café')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">

    @stack('styles')
</head>
<body>

    <header class="site-header">
        <nav class="navbar">
            <a href="{{ url('/') }}" class="brand">
                ☕ Brew &amp; Bloom Café
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <h2>Brew &amp; Bloom Café</h2>
        <p class="footer-tagline">Your Daily Dose of Happiness.</p>
        <p class="footer-members">Group Members: Pagura, Ramos, Lim</p>
        <p class="footer-copy">&copy; {{ date('Y') }} Brew &amp; Bloom Café. All Rights Reserved.</p>
    </footer>

    @stack('scripts')

</body>
</html>