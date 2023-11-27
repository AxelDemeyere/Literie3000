@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8 my-5">
        <h2>Modifier {{ $produit->nom }} </h2>
    </div>
    <div class="d-flex mx-auto col-8 justify-content-center">

        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

        <div style="background-color: #0C4085" class="d-flex justify-content-center border rounded shadow col-6 py-5">
            <form class="d-flex flex-column text-white" action="" method="post" enctype="multipart/form-data">
                @csrf

                <label for="photo">Photo du produit :</label>
                <input type="file" class="mb-2" name="photo" id="photo">
                @error('photo')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="nom">Nom du produit:</label>
                <input class="mb-2" type="text" name="nom" id="name" value="{{ old('nom', $produit->nom) }}">
                @error('nom')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="ref">Référence :</label>
                <textarea class="mb-2" name="ref" id="details" cols="10" rows="2">{{ old('ref', $produit->ref) }}</textarea>
                @error('ref')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="longueur">Longueur :</label>
                <input class="mb-2" type="text" name="longueur" id="longueur"
                    value="{{ old('longueur', $produit->longueur) }}">
                @error('longueur')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="largeur">Largeur :</label>
                <input class="mb-2" type="text" name="largeur" id="largeur"
                    value="{{ old('largeur', $produit->largeur) }}">
                @error('largeur')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="prix">Prix </label>
                <input class="mb-2" type="text" name="prix" id="price"
                    value="{{ old('prix', $produit->prix) }}">
                @error('prix')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="remise">Remise :</label>
                <input class="mb-5" type="text" name="remise" id="remise"
                    value="{{ old('remise', $produit->remise) }}">
                @error('remise')
                    <div class="">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-outline-light col-10">Confirmer la modification</button>
            </form>
        </div>
    </div>
@endsection
