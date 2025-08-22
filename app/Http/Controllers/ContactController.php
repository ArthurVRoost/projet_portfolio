<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('Backend.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id){
        $contact = Contact::findOrFail($id);
        $contact->update([
            'street' => $request->street,
            'number' => $request->number,
            'city' => $request->city,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('contacts.edit', $contact->id);
    }
}
