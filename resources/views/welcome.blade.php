
@extends('layouts.app')

@section('title', 'Home | Brew & Bloom Café')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section class="hero">
    <div class="hero-content">
        <span class="eyebrow">WELCOME TO BREW & BLOOM</span>

        <h1>Where Every Cup<br>Feels Like <span>Home.</span></h1>

        <p>
            Discover the perfect blend of handcrafted coffee,
            freshly baked treats, and warm moments.
            Your daily dose of happiness starts here.
        </p>

        <div class="hero-buttons">
            <a href="#menu" class="btn-primary">Explore Our Menu</a>
            <a href="{{ url('/about') }}" class="btn-secondary">Our Story →</a>
        </div>

        <div class="hero-note">
            <span>✦</span> Freshly brewed. Lovingly served.
        </div>
    </div>

    <div class="hero-slider">
        <div class="slide active">
            <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1000"
                 alt="Freshly brewed coffee">
        </div>

        <div class="slide">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=1000"
                 alt="A delicious cup of coffee">
        </div>

        <div class="slide">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1000"
                 alt="Coffee served in a cozy cafe">
        </div>

        <button class="slider-btn prev" aria-label="Previous image">❮</button>
        <button class="slider-btn next" aria-label="Next image">❯</button>

        <div class="slider-dots">
            <button class="dot active" aria-label="Show image 1"></button>
            <button class="dot" aria-label="Show image 2"></button>
            <button class="dot" aria-label="Show image 3"></button>
        </div>
    </div>
</section>

<section class="intro-section">
    <span class="eyebrow">A LITTLE MOMENT OF JOY</span>
    <h2>Good Coffee. Good Mood.<br><span>Great Moments.</span></h2>
    <p>
        At Brew & Bloom, we believe that the best moments
        begin with a good cup of coffee. Come in, slow down,
        and enjoy something wonderful.
    </p>
</section>

<section class="menu-section" id="menu">
    <div class="section-heading">
        <div>
            <span class="eyebrow">MADE WITH LOVE</span>
            <h2>Our <span>Favorites</span></h2>
        </div>
        <p>A little something to make your day better.</p>
    </div>

    <div class="menu-grid">
        <article class="menu-card">
            <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=700"
                 alt="Iced latte">
            <div class="menu-info">
                <h3>Iced Latte</h3>
                <p>Smooth espresso with chilled milk.</p>
                <span>₱120</span>
            </div>
        </article>

        <article class="menu-card">
            <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=700"
                 alt="Cappuccino">
            <div class="menu-info">
                <h3>Cappuccino</h3>
                <p>Rich espresso with creamy foam.</p>
                <span>₱130</span>
            </div>
        </article>

        <article class="menu-card">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=700"
                 alt="Freshly baked pastry">
            <div class="menu-info">
                <h3>Fresh Croissant</h3>
                <p>Flaky, buttery, freshly baked.</p>
                <span>₱95</span>
            </div>
        </article>
    </div>
</section>

<section class="closing-section">
    <span>YOUR TABLE IS WAITING</span>
    <h2>Make Today a Little<br>More <em>Wonderful.</em></h2>
    <a href="{{ url('/contact') }}" class="btn-primary">Get in Touch →</a>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
