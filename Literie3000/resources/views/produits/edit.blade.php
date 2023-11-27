@extends('layouts.app')
@section('content')
    <div class="mx-auto col-8 my-5">
        <h2>Modifier {{ $produit->marque->nom }} {{$produit->ref}} </h2>
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

                <label for="marque" class="block">Marque</label>
                <select name="marque" id="marque" class="mb-2">
                    @foreach ($marques as $marque)
                        {{-- <option @selected($marque->id == old('marque')) value="{{ $marque->id }}">{{ $marque->name }}</option> --}}
                        <option value="{{$marque->id}}">{{$marque->nom}}</option>
                    @endforeach
                </select>
                @error('marque')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="ref">Référence :</label>
                <textarea class="mb-2" name="ref" id="details" cols="10" rows="2">{{ old('ref', $produit->ref) }}</textarea>
                @error('ref')
                    <div class="">{{ $message }}</div>
                @enderror

                <label for="dimension" class="block">Dimensions</label>
                <select name="dimension" id="dimension" class="mb-2">
                    @foreach ($dimensions as $dimension)
                        {{-- <option @selected($marque->id == old('marque')) value="{{ $marque->id }}">{{ $marque->name }}</option> --}}
                        <option value="{{$dimension->id}}">{{$dimension->taille}}</option>
                    @endforeach
                </select>
                @error('marque')
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
