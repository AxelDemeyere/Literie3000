<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use Illuminate\Http\Request;

class DimensionController extends Controller
{
    public function index()
    {
        return view("dimensions/index", [
            'dimensions' => Dimension::all()
        ]);
    }

    public function create() 
    {
        return view('dimensions/create', [
        ]);
    }


public function store(Request $request) {
    $request->validate([
        'taille' => 'required|min:1',
        ]);

        $dimension = new Dimension();
        $dimension->taille = $request->taille;

        $dimension->save();

        return redirect ('/dimensions');

}

public function edit($id)
{
    $dimension = Dimension::findOrFail($id);

    return view('dimensions/edit', [
        'dimension' => $dimension,
    ]);
}

public function update(Request $request, $id) {

    $dimension = Dimension::findOrFail($id);

    $request->validate([
        'taille' => 'required|min:1',
        ]);

        $dimension->taille = $request->taille;

        $dimension->save();

        return redirect ('/dimensions');
    }

public function destroy($id) {

    Dimension::destroy($id);
    
    return redirect('/dimensions');
}
}
