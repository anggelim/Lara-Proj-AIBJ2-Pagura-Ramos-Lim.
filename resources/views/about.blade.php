@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="/css/about.css">
@endpush

@section('content')
    <section class="about-hero">
        <span class="eyebrow">OUR STORY</span>
        <h1>Brewed with <span>Passion</span> & Purpose</h1>
        <p class="about-lead">
            Brew & Bloom Café started as a cozy neighborhood spot dedicated to slow mornings,
            ethical beans, and welcoming hospitality.
        </p>

        <div id="moreStory" class="extra-story" hidden>
            <p>
                We partner directly with local growers and small-batch roasters so every pour-over,
                espresso shot, and flaky pastry reflects care from farm to cup.
            </p>
        </div>

        <button type="button" id="toggleStoryBtn" class="primary-button">Read More</button>
    </section>

    <section class="mv-grid">
        <div class="mv-card">
            <span class="eyebrow">MISSION</span>
            <h2>Craft Comforting Moments</h2>
            <p>Serve thoughtfully sourced coffee and freshly baked goods in a space where everyone feels at home.</p>
        </div>
        <div class="mv-card">
            <span class="eyebrow">VISION</span>
            <h2>Grow a Warm Community</h2>
            <p>Be the go-to local gathering place known for warmth, consistency, and everyday joy.</p>
        </div>
    </section>

    <section class="stats-section">
        <div class="stat-item">
            <strong class="counter" data-target="500">0</strong><span>+</span>
            <p>Happy Daily Guests</p>
        </div>
        <div class="stat-item">
            <strong class="counter" data-target="25">0</strong><span>+</span>
            <p>Signature Drinks & Bakes</p>
        </div>
        <div class="stat-item">
            <strong class="counter" data-target="3">0</strong>
            <p>Dedicated Team Leads</p>
        </div>
    </section>

    <section class="team-section">
        <div class="section-heading">
            <span class="eyebrow">THE PEOPLE BEHIND THE BAR</span>
            <h2>Meet Our <span>Team</span></h2>
        </div>

        <div class="team-grid">
            <article class="team-card">
                <h3>Pagura</h3>
                <p class="role">Lead Roaster & Operations</p>
                <p>Oversees roast profiles, store setup, and daily quality standards.</p>
            </article>
            <article class="team-card">
                <h3>Ramos</h3>
                <p class="role">Head Barista & Storyteller</p>
                <p>Curates seasonal recipes, latte art, and the café experience.</p>
            </article>
            <article class="team-card">
                <h3>Lim</h3>
                <p class="role">Guest Experience & Community</p>
                <p>Handles customer outreach, partnerships, and neighborhood events.</p>
            </article>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="/js/about.js"></script>
@endpush