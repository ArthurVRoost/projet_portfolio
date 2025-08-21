<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::with('avatar')->first();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::first();

        return view('home', compact('about', 'skills', 'portfolios', 'services', 'testimonials', 'contact'));
    }
}
