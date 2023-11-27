@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8">
        <div class="my-5">
            <h2>Nos marques</h2>
            <p><a  href="/marques/creer">Ajouter nouvelle marque</a></p>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-wrap gap-4 mx-auto justify-content-center">
                @foreach ($marques as $marque)
                    <div class="card shadow mb-5" style="width: 18rem;">
                        <div class="card-body">

                            <img src="/photos/{{ $marque->photo }}" class="card-img-top mb-2" alt="...">
                            <h5 class="card-title text-uppercase">{{ $marque->nom }}</h5>


                            <a href="/marque/{{ $marque->id }}/modifier" class="card-link">Modifier</a>
                            <a href="/marque/{{ $marque->id }}/supprimer" class="card-link">Supprimer</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
