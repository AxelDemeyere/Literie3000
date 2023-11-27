<?php

use App\Http\Controllers\DimensionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/home", [HomeController::class,"index"]);


// CRUD Produits
Route::get("/produits", [ProduitController::class,"index"]);
// Creer
Route::get("/produits/creer", [ProduitController::class,"create"]);
Route::post("/produits/creer", [ProduitController::class,"store"]);
// Modifier
Route::get("/produit/{id}/modifier", [ProduitController::class,"edit"]);
Route::post("/produit/{id}/modifier", [ProduitController::class,"update"]);
//Supprimer
Route::get("/produit/{id}/supprimer", [ProduitController::class,"destroy"]);

//CRUD Marques
Route::get("/marques", [MarqueController::class,"index"]);
Route::get("/marques/creer", [MarqueController::class,"create"]);
Route::post("/marques/creer", [MarqueController::class,"store"]);
Route::get("/marque/{id}/supprimer", [MarqueController::class,"destroy"]);

//CRUD Dimensions
Route::get("/dimensions", [DimensionController::class,"index"]);
Route::get("/dimensions/creer", [DimensionController::class,"create"]);
Route::post("/dimensions/creer", [DimensionController::class,"store"]);
Route::get("/dimension/{id}/supprimer", [DimensionController::class,"destroy"]);