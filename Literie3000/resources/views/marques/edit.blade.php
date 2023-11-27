@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8 my-5">
        <h2>Modifier {{$marque->nom}}</h2>

    </div>
    <div class="d-flex mx-auto col-8 justify-content-center">

        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach


        <div style="background-color: #0C4085" class="d-flex justify-content-center border rounded shadow col-6 py-5">
            <form class="d-flex flex-column col-6 text-white" action="" method="post"
                enctype="multipart/form-data">
                @csrf

                <label for="photo">Photo de la marque :</label>
                <input type="file" class="mb-2" name="photo" id="photo">

                <label for="nom">Nom de la marque:</label>
                <input class="mb-2" type="text" name="nom" id="name" value="{{ old('nom', $marque->nom) }}">
                @error('nom')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-outline-light col-4">Modifier</button>
            </form>
        </div>
    @endsection
