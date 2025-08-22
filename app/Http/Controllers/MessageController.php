<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('Backend.messages.index', compact('messages'));
    }

    public function store(Request $request){
    Message::create([
        'nom' => $request->nom,
        'email' => $request->email,
        'sujet' => $request->sujet,
        'message' => $request->message,
    ]);
    return back()->with('success', 'Message envoyé avec succès !');
    }
    public function destroy($id){
    $message = Message::findOrFail($id);
    $message->delete();

    return redirect()->route('messages.index')->with('success', 'Message supprimé avec succès !');
    }
}
