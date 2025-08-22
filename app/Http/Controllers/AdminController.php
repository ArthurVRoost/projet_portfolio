<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;
// COMME LE HOMECONTROLLER ON RECUP TOUTES LES VARIABLES 
class AdminController extends Controller
{
    public function index()
    {
        $about = About::with('avatar')->first();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::first();

        return view('Backend.admin', compact('about', 'skills', 'portfolios', 'services', 'testimonials', 'contact'));
    }
}
