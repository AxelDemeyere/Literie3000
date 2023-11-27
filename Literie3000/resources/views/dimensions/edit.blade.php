@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8 my-5">
        <h2>Modifier dimension</h2>

    </div>
    <div class="d-flex mx-auto col-8 justify-content-center">

        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach


        <div style="background-color: #0C4085" class="d-flex justify-content-center border rounded shadow col-6 py-5">
            <form class="d-flex flex-column col-6 text-white" action="" method="post">
                @csrf
                <label for="taille">Dimensions:</label>
                <input class="mb-2" type="text" name="taille" id="name" value="{{ old('taille', $dimension->taille) }}">
                @error('taille')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-outline-light col-4">Modifier</button>
            </form>
        </div>
    @endsection
