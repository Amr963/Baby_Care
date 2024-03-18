<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\VaccinesController;
use App\Http\Controllers\ChildProgressController;
use App\Http\Controllers\ChildLengthStatsController;
use App\Http\Controllers\ChildWeightStatsController;
use App\Http\Controllers\FrequentlyAskedQuestionsController;
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
Route::resource('/child_progress', ChildProgressController::class);
Route::resource('/ChildWeightStats', ChildWeightStatsController::class);
Route::resource('/ChildLengthStats', ChildLengthStatsController::class);

Route::resource('/frequently_asked_questions', FrequentlyAskedQuestionsController::class);