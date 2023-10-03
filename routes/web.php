<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/api/agencies', [AgencyController::class,'index']);
Route::post('/api/agencies', [AgencyController::class,'store']);
Route::put('/api/agencies/{$id}', [AgencyController::class,'update']);
Route::delete('/api/agencies{$id}', [AgencyController::class,'destroy']);
    
Route::get('/agencies/new', [AgencyController::class,'newView']);
Route::get('/agencies/edit/{$id}', [AgencyController::class,'editView']);
Route::get('/agencies/list', [AgencyController::class,'listView']);