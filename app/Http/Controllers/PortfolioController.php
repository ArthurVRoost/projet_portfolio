<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('Backend.portfolio.index', compact('portfolios'));
    }
    public function create(){
        return view('Backend.portfolio.create');

    }

    public function store(Request $request){
        $path = $request->file('img')->store('portfolio-assets', 'public');
        Portfolio::create([
            'img' => 'storage/'.$path,
            'filter' => $request->filter,
        ]);
        return redirect()->route('portfolios.index');
    }

    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('Backend.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id){
        $portfolio = Portfolio::findOrFail($id);
        $data = ['filter' => $request->filter];

        // MAJ IMG IF NOUVELLE IMG
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('portfolio-assets', 'public');
            $data['img'] = 'storage/' . $path;
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index');
    }

    public function destroy($id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolios.index');
    }
}
