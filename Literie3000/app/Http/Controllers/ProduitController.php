<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Marque;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Dimensions;

class ProduitController extends Controller
{
    public function index()
    {
        return view("produits/index", [
            'produits' => Produit::with('marque')->get()
        ]);
    }

    public function create() 
    {
        return view('produits/create', [
        'marques' => Marque::all(),
        'dimensions' => Dimension::all(),
        ]);
    }


public function store(Request $request) {
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'marque' => 'required|min:1|exists:marques,id',
        'ref' => 'required|min:1',
        'dimension' => 'required|integer|exists:dimensions,id',
        'remise' => 'nullable|integer|min:1',
        'prix' => 'required|integer|min:1',
        ]);

        $produit = new Produit();
        $produit->marque_id = $request->marque;
        $produit->ref = $request->ref;
        $produit->dimension_id = $request->dimension;
        $produit->remise = $request->remise;
        $produit->prix = $request->prix;

        if ($request->hasFile('photo')) {
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            $produit->photo = $photoName;
        }


        $produit->save();

        return redirect ('/produits');

}

public function edit($id)
{
    $produit = Produit::findOrFail($id);

    return view('/produits/edit', [
        'produit' => $produit,
        'marques' => Marque::all(),
        'dimensions' => Dimension::all(),

    ]);
}

public function update(Request $request, $id) {

    $produit = Produit::findOrFail($id);

    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'marque' => 'required|min:1|exists:marques,id',
        'ref' => 'required|min:1',
        'dimension' => 'required|integer|exists:dimensions,id',
        'remise' => 'nullable|integer|min:1',
        'prix' => 'required|integer|min:1',
        ]);

        $produit->marque_id = $request->marque;
        $produit->ref = $request->ref;
        $produit->dimension_id = $request->dimension;
        $produit->remise = $request->remise;
        $produit->prix = $request->prix;

        if ($request->hasFile('photo')) {
            $photoName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('photos'), $photoName);
            $produit->photo = $photoName;
        }

        $produit->save();

        return redirect ('/produits');
    }

    public function destroy($id) {

        Produit::destroy($id);
        
        return redirect('/produits');
    }
}
