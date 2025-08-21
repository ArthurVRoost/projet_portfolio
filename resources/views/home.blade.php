@extends('layouts.frontend.app')

@section('title', 'Accueil')

@section('content')
@include('partials.navFront')
<main class="main-content">
        <div id="home" class="hero-section">
            <h1 class="hero-title">Gary Axen</h1>
            <p class="hero-subtitle">I'm a Developer</p>
        </div>
    </main>
    <div class="page2">
        <div>
            <h2 class="mt-5" id="about">About</h2>
        </div>
        
        <div>
            <h2 class="mt-5" id="skills">Skills</h2>
        </div>
        <div>
            <h2 class="mt-5" id="portfolio">Portfolio</h2>
        </div>
        <div>
            <h2 class="mt-5" id="services">Services</h2>
        </div>
        <div>
            <h2 class="mt-5" id="testemonials">Testemonials</h2>
        </div>
        <div>
            <h2 class="mt-5" id="contact">Contact</h2>
        </div>
    </div>
    
@endsection