@extends('layouts.backend.app')

@section('title', 'Portfolios')

@section('content')
    <div class="page2">
        
        <h1 class="mt-5">Admin Dashboard</h1>
        <h2 class="titreAbout mt-5">Which content do you wish to set?</h2>
        <div class="adminDiv1">
            <div class="adminCard">
                <h3 class="adminTitle">About Settings</h3>
                <p class="adminP">Settings for about page</p>
                <p class="adminP2">To change the contact of your about page</p>
                <a class="adminA" href="{{ route('about.edit', $about->id) }}"><button class="adminBtn">Edit About</button></a>
            </div>
            <div class="adminCard">
                <h3 class="adminTitle">Portfolio Settings</h3>
                <p class="adminP">Settings for porfolio page</p>
                <p class="adminP2">To change the contact of your portfolio page</p>
                <a class="adminA" href="{{ route('portfolios.edit', $about->id) }}"><button class="adminBtn">Edit Portfolio</button></a>
            </div>
            <div class="adminCard">
                <h3 class="adminTitle">Skills Settings</h3>
                <p class="adminP">Settings for skills page</p>
                <p class="adminP2">To change the contact of your skills page</p>
                <a class="adminA" href="{{ route('skills.edit', $about->id) }}"><button class="adminBtn">Edit Skills</button></a>
            </div>
        </div>
        <div class="adminDiv1">
            <div class="adminCard">
                <h3 class="adminTitle">Services Settings</h3>
                <p class="adminP">Settings for services page</p>
                <p class="adminP2">To change the contact of your services page</p>
                <a class="adminA" href="{{ route('services.edit', $about->id) }}"><button class="adminBtn">Edit Services</button></a>
            </div>
            <div class="adminCard">
                <h3 class="adminTitle">Testimonials Settings</h3>
                <p class="adminP">Settings for testimonials page</p>
                <p class="adminP2Testi">To change the contact of your  testimonials page</p>
                <a class="adminA" href="{{ route('testimonials.edit', $about->id) }}"><button class="adminBtn">Edit Testimonials</button></a>
            </div>
            <div class="adminCard">
                <h3 class="adminTitle">Contact Settings</h3>
                <p class="adminP">Settings for contact page</p>
                <p class="adminP2">To change the contact of your contact page</p>
                <a class="adminA" href="{{ route('contacts.edit', $contact->id) }}"><button class="adminBtn">Edit Contact</button></a>
            </div>
        </div>
        
    </div>
    

@endsection