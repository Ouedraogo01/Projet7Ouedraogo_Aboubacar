<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/delete-etudiant/{id}', [UsersController::class, 'delete_etudiant']);
Route::get('/update-etudiant/{id}', [UsersController::class, 'update_etudiant']);
Route::post('/update/traitement', [UsersController::class, 'update_etudiant_traitement']);
Route::get('/etudiant', [UsersController::class, 'liste_etudiant']);
Route::get('/ajouter', [UsersController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [UsersController::class, 'ajouter_etudiant_traitement']);