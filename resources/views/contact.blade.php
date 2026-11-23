@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <section class="contact-wrapper">
        <div class="contact-header">
            <span class="eyebrow">GET IN TOUCH</span>
            <h1>We’d Love to <span>Hear From You</span></h1>
            <p>Have a question, feedback, or group order request? Send us a note below.</p>
        </div>

        <div class="contact-layout">
            <form id="contactForm" class="contact-form" novalidate>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
                    <small class="error-msg" id="nameError"></small>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com">
                    <small class="error-msg" id="emailError"></small>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="What is this about?">
                    <small class="error-msg" id="subjectError"></small>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message..."></textarea>
                    <small class="error-msg" id="messageError"></small>
                </div>

                <button type="submit" class="primary-button">Send Message</button>

                <div id="formSuccess" class="success-box" hidden>
                    Thank you! Your message has been validated and is ready to send.
                </div>
            </form>

            <aside class="contact-info">
                <h2>Visit Brew & Bloom Café</h2>
                <p><strong>Hours:</strong> Mon – Sun, 7:00 AM – 9:00 PM</p>
                <p><strong>Email:</strong> hello@brewandbloom.local</p>
                <p><strong>Location:</strong> Buenavista, Caraga, Philippines</p>
            </aside>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush