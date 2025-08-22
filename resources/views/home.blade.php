@extends('layouts.frontend.app')

@section('title', 'Accueil')

@section('content')
@include('partials.navFront')
    <main class="main-content" style="background-image: url({{ asset("storage/portfolio-assets/bgBlue2.jpeg") }}); height: 100vh; width: 94.3vw; background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div id="home" class="hero-section" >
            <h1 class="hero-title">Gary Axen</h1>
            <p class="hero-subtitle">I'm a Developer</p>
        </div>
    </main>
    <div class="page2">
        <div>
            <h2 class="mt-5 titreAbout" id="about">About</h2>
            <p class="aboutPText">Magnam dolores commodi suscipit. Necessitabus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupidate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste ofiicis commodi quidem hic quas.</p>
            <div class="divAbout">
                <div class="divAbout1">
                    <img class="imgAbout" src="{{ asset($about->avatar->image ?? 'default-avatar.jpg') }}" alt="Avatar" >
                </div>
                <div class="divAbout2">
                    <p class="aboutSubtitle"> {{ $about->subtitle }}</p>
                    <p class="loremAbout">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deserunt ratione neque, ut blanditiis quod odio necessitatibus quibusdam officia iusto?</p>
                    <div class="divAbout3"> 
                        <div class="divAbout4">
                            <p> <span class="spanAbout">></span>&nbsp;  <strong>Birthdate:</strong> {{ $about->birthdate }}</p>
                            <p> <span class="spanAbout">></span>&nbsp;  <strong>Website:</strong> {{ $about->website }}</p>
                            <p> <span class="spanAbout">></span>&nbsp;  <strong>Phone:</strong> {{ $about->phone }}</p>
                            <p> <span class="spanAbout">></span>&nbsp; <strong>City:</strong> {{ $about->city }}</p>
                        </div>
                        <div class="divAbout5">
                            <p> <span class="spanAbout">></span>&nbsp; <strong>Age:</strong> {{ $about->age }}</p>
                            <p> <span class="spanAbout">></span>&nbsp; <strong>Degree:</strong> {{ $about->degree }}</p>
                            <p> <span class="spanAbout">></span>&nbsp; <strong>Email:</strong> {{ $about->email }}</p>
                            <p> <span class="spanAbout">></span>&nbsp; <strong>Freelance:</strong> {{ $about->freelance }}</p>
                        </div>
                    </div>
                    <p class="divAboutSubtext">{{ $about->subtext }}</p>
                </div>

            </div>
            
        </div>
        
        <div>
            <h2 class="mt-5 titreAbout" id="skills">Skills</h2>
            <p class="aboutPText">Magnam dolores commodi suscipit. Necessitabus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupidate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste ofiicis commodi quidem hic quas.</p>
            <div class="skills-list" >
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
            <h2 class="mt-5 titreAbout" id="portfolio">Portfolio</h2>
            <p class="aboutPText">Magnam dolores commodi suscipit. Necessitabus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupidate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste ofiicis commodi quidem hic quas.</p>
            <div class="divPortfolio1">
                <p> <span class="portfolioSpan">ALL</span> </p>
                <p class="portfolioP">APP</p>
                <p class="portfolioP">WEB</p>
                <p class="portfolioP">CARD</p>
            </div>
            <div class="portfolio-container">
                @foreach ($portfolios as $portfolio)
                    <div class="portfolio-item">
                        <img src="{{ asset($portfolio->img) }}" alt="">
                    </div>
                @endforeach
            </div>
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