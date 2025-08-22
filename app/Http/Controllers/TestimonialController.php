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
        

        
        $path = $request->file('img')->store('testimonial-assets', 'public');

        
        Testimonial::create([
            'comment' => $request->comment,
            'img' => 'storage/' . $path,
            'name' => $request->name,
            'positions' => $request->positions,
        ]);

        return redirect()->route('testimonials.index');
    }

    public function edit($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('Backend.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, $id){
        $testimonial = Testimonial::findOrFail($id);

        
        $data = [
            'comment' => $request->comment,
            'name' => $request->name,
            'positions' => $request->positions,
        ];


        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('testimonial-assets', 'public');
            $data['img'] = 'storage/' . $path;
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index');
    }

    public function destroy($id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}