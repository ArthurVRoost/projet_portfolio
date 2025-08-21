<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        return view('Backend.testimonials.index', compact('testimonials'));
    }

    public function create(){
        return view('Backend.testimonials.create');
    }

    public function store(Request $request){
       
        Testimonial::create($request->all());
        return redirect()->route('testimonials.index');
    }

    public function edit($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('Backend.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());
        return redirect()->route('testimonials.index');
    }

    public function destroy($id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
