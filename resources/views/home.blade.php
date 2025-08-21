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
            <img src="{{ asset($about->avatar->image ?? 'default-avatar.jpg') }}" alt="Avatar" style="width:150px;">
            <p><strong>Subtitle:</strong> {{ $about->subtitle }}</p>
            <p><strong>Birthdate:</strong> {{ $about->birthdate }}</p>
            <p><strong>City:</strong> {{ $about->city }}</p>
            <p><strong>Age:</strong> {{ $about->age }}</p>
            <p><strong>Email:</strong> {{ $about->email }}</p>
            <p><strong>Freelance:</strong> {{ $about->freelance }}</p>
            <p>{{ $about->subtext }}</p>
        </div>
        
        <div>
            <h2 class="mt-5" id="skills">Skills</h2>
            <div class="skills-list" style="display:flex; flex-direction:column; gap:15px; margin-top:20px; max-width:600px;">
                @foreach ($skills as $skill)
                    <div class="skill-item" style="display:flex; align-items:center; gap:10px;">
                        <label style="width:100px;">{{ $skill->skill }}</label>
                        <input type="range" value="{{ $skill->pourcentage }}" max="100" disabled style="flex:1;">
                        <span>{{ $skill->pourcentage }}%</span>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="mt-5" id="portfolio">Portfolio</h2>
            @foreach ( $portfolios as $portfolio )
                <div class="portfolio-item" style="width:200px; text-align:center;">
                    <img src="{{ asset($portfolio->img) }}"  alt="" style="width:100%; border-radius:8px; object-fit:cover;">
                </div>
            @endforeach
            

        </div>
        <div>
            <h2 class="mt-5" id="services">Services</h2>
            <div>
                <div class="services-list" style="display:flex; flex-wrap:wrap; gap:20px; margin-top:20px;">
                    @foreach ($services as $service)
                        <div class="service-item" style="width:250px; padding:15px; border:1px solid #ddd; border-radius:8px; text-align:center;">
                            <i class="{{ $service->icon }}" style="font-size:40px; margin-bottom:10px;"></i>
                            <h3 style="margin:10px 0;">{{ $service->title }}</h3>
                            <p>{{ $service->text }}</p>
                        </div>
                    @endforeach
            </div>
        </div>
        </div>
        <div>
            <h2 class="mt-5" id="testemonials">Testimonials</h2>
            <div class="testimonials-list" style="display:flex; flex-wrap:wrap; gap:20px; margin-top:20px;">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-item" style="width:250px; padding:15px; border:1px solid #ddd; border-radius:8px; text-align:center;">
                        <img src="{{ asset($testimonial->img) }}" alt="{{ $testimonial->name }}" style="width:80px; height:80px; border-radius:50%; object-fit:cover; margin-bottom:10px;">
                        <p>"{{ $testimonial->comment }}"</p>
                        <h4>{{ $testimonial->name }}</h4>
                        <small>{{ $testimonial->positions }}</small>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2 class="mt-5" id="contact">Contact</h2>
            <p>{{ $contact->street }} {{ $contact->number }}, {{ $contact->city }} {{ $contact->zip }}</p>
            <p>Téléphone : {{ $contact->phone }}</p>
            <p>Email : <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
        </div>
    </div>
    
@endsection