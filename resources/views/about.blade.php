@extends('layouts.app')

@section('title', 'About')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
<div class="about-page">

    <!-- about the cafe -->
    <section class="about-intro">
        <h1>About Brew &amp; Bloom Café</h1>
        <p>
            Brew &amp; Bloom Café started as a small coffee corner in our town.
            Now it is a cozy place where students, workers, and families
            come to enjoy good coffee and sweet treats.
        </p>

        <!-- hidden at first, the button shows it -->
        <p id="more-text" class="about-hidden">
            We use locally grown coffee beans and bake our pastries fresh
            every morning. We want every customer to have a warm place to
            relax, study, or hang out with friends.
        </p>

        <button id="read-btn">Read More</button>
    </section>

    <!-- mission and vision -->
    <section class="about-mv">
        <div class="mv-box">
            <h2>Our Mission</h2>
            <p>To serve good coffee and friendly service to everyone in our community.</p>
        </div>
        <div class="mv-box">
            <h2>Our Vision</h2>
            <p>To become the favorite coffee spot in our town.</p>
        </div>
    </section>

    <!-- team -->
    <section class="about-team">
        <h2>Meet Our Team</h2>
        <div class="team-cards">
            <div class="team-card">
                <h3>Jafiah Shaira Pagaura</h3>
                <p>Owner</p>
            </div>
            <div class="team-card">
                <h3>Angelica Lim</h3>
                <p>Head Barista</p>
            </div>
            <div class="team-card">
                <h3>First Name Ramos</h3>
                <p>Baker</p>
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
