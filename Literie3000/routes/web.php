<?php

use App\Http\Controllers\HomeController;
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


// CRUD
Route::get("/produits", [ProduitController::class,"index"]);
// Creer
Route::get("/produits/creer", [ProduitController::class,"create"]);
Route::post("/produits/creer", [ProduitController::class,"store"]);
// Modifier
Route::get("/produit/{id}/modifier", [ProduitController::class,"edit"]);
Route::post("/produit/{id}/modifier", [ProduitController::class,"update"]);
//Supprimer
Route::get("/produit/{id}/supprimer", [ProduitController::class,"destroy"]);
