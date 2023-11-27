<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view("produits/index", [
            'produits' => Produit::all()
        ]);
    }

    public function create() 
    {
        return view('produits/create', [
        'produits' => Produit::all()->sortBy('nom')
        ]);
    }


public function store(Request $request) {
    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'nom' => 'required|min:1',
        'ref' => 'required|min:1',
        'longueur' => 'required|integer|min:3',
        'largeur' => 'required|integer|min:2',
        'remise' => 'nullable|integer|min:1',
        'prix' => 'required|integer|min:1',
        ]);

        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->ref = $request->ref;
        $produit->longueur = $request->longueur;
        $produit->largeur = $request->largeur;
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

    ]);
}

public function update(Request $request, $id) {

    $produit = Produit::findOrFail($id);

    $request->validate([
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        'nom' => 'required|min:1',
        'ref' => 'required|min:1',
        'longueur' => 'required|integer|min:3',
        'largeur' => 'required|integer|min:2',
        'remise' => 'nullable|integer|min:1',
        'prix' => 'required|integer|min:1',
        ]);

        $produit->nom = $request->nom;
        $produit->ref = $request->ref;
        $produit->longueur = $request->longueur;
        $produit->largeur = $request->largeur;
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
