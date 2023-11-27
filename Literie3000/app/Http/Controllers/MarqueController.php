<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Marques;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function index()
    {
        return view("marques/index", [
            'marques' => Marque::all()
        ]);
    }

    public function create() 
    {
        return view('marques/create', [
        ]);
    }


public function store(Request $request) {
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'nom' => 'required|min:1',
        ]);

        $marque = new Marque();
        $marque->nom = $request->nom;


        if ($request->hasFile('photo')) {
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            $marque->photo = $photoName;
        }


        $marque->save();

        return redirect ('/marques');

}

public function destroy($id) {

    Marque::destroy($id);
    
    return redirect('/marques');
}
}

