@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8">
        <div class="my-5">
            <h2>Nos dimensions</h2>
            <p><a  href="/dimensions/creer">Ajouter nouvelle dimension</a></p>
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-wrap gap-4 mx-auto justify-content-center">
                @foreach ($dimensions as $dimension)
                    <div class="card shadow mb-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">{{ $dimension->taille }}</h5>
                            <a href="/dimension/{{ $dimension->id }}/modifier" class="card-link">Modifier</a>
                            <a href="/dimension/{{ $dimension->id }}/supprimer" class="card-link">Supprimer</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
