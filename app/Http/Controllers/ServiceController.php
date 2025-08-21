<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('Backend.services.index', compact('services'));
    }

    
    public function create(){
        return view('Backend.services.create');
    }

    
    public function store(Request $request){
        $request->validate([
            'icon'  => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'text'  => 'required|string',
        ]);

        Service::create($request->all());

        return redirect()->route('services.index');
    }

    
    public function edit($id){
        $service = Service::findOrFail($id);
        return view('Backend.services.edit', compact('service'));
    }

    
    public function update(Request $request, $id){
        $service = Service::findOrFail($id);

        $service->update($request->all());

        return redirect()->route('services.index');
    }

    
    public function destroy($id){
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index');
    }
}
