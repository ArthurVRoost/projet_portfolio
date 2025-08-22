<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Avatar;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit($id)
    {
        $about = About::with('avatar')->findOrFail($id);
        return view('Backend.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $about->update([
            'subtitle'  => $request->subtitle,
            'birthdate' => $request->birthdate,
            'website'   => $request->website,
            'phone'     => $request->phone,
            'city'      => $request->city,
            'age'       => $request->age,
            'degree'    => $request->degree,
            'email'     => $request->email,
            'freelance' => $request->freelance,
            'subtext'   => $request->subtext,
        ]);

    //    VERIFIE SI UNE PHOTO EXISTE, SI OUI ON MET A JOUR ET AVANT CA IL CHERCHE L'IMAGE EXISTANTE 
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('about-avatars', 'public');
            $avatar = Avatar::where('about_id', $about->id)->first();
            if ($avatar) {
                $avatar->update([
                    'image' => 'storage/' . $path
                ]);
            } 
        }
        return redirect()->route('about.edit', $about->id);
    }
}