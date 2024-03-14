<?php

use App\Http\Controllers\FrequentlyAskedQuestionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\VaccinesController;
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

Route::resource('/vaccines', VaccinesController::class);

Route::resources([
    '/children' => ChildrenController::class,
]);

Route::resource('/frequently_asked_questions', FrequentlyAskedQuestionsController::class);
