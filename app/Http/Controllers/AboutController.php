<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function edit($id){
        $about = About::findOrFail($id);
        return view('Backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id){
        $about = About::findOrFail($id);
        $about->update([
            'subtitle' => $request->subtitle,
            'birthdate' => $request->birthdate,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $request->age,
            'degree' => $request->degree,
            'email' => $request->email,
            'freelance' => $request->freelance,
            'subtext' => $request->subtext,
        ]);

        return redirect()->route('about.edit', $about->id);
    }
}
