@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8">
        <div class="my-5">
            <h2>Nos produits</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-wrap gap-4 mx-auto justify-content-center">
                @foreach ($produits as $produit)
                    <div class="card shadow mb-5" style="width: 18rem;">
                        <div class="card-body">

                            <img src="/photos/{{ $produit->photo }}" class="card-img-top mb-2" alt="...">
                            <h5 class="card-title text-uppercase">{{ $produit->nom }}</h5>
                            <div class="d-flex justify-content-between flex-start">
                                @if ($produit->remise > 0)
                                    <h6
                                        class="flex-startcard-subtitle mb-2 text-body-secondary opacity-50 text-decoration-line-through">
                                        {{ $produit->prix }}€ </h6>
                                @else
                                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $produit->prix }}€ </h6>
                                @endif
                                @if ($produit->remise > 0)
                                    <h6 class="card-subtitle mb-2 text-danger fw-bold">
                                        {{ $produit->prix * (1 - $produit->remise / 100) }}€</h6>
                                @endif
                            </div>
                            <p class="card-text">Matelas {{ $produit->ref }} </p>
                            <p class="card-text"> {{ $produit->longueur }}x{{ $produit->largeur }} </p>
                            <a href="/produit/{{ $produit->id }}/modifier" class="card-link">Modifier</a>
                            <a href="/produit/{{ $produit->id }}/supprimer" class="card-link">Supprimer</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
