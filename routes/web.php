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
    return view('Diseases.diseases');
})->name('diseases');;

Route::resource('/vaccines', VaccinesController::class);
Route::get('fromChooseAge', [VaccinesController::class, 'fromChooseAge'])->name('fromChooseAge');
Route::post('/rightVaccine', [VaccinesController::class, 'rightVaccine'])->name('rightVaccine');
Route::resource('/ChildLengthStats', ChildLengthStatsController::class);

Route::resources([
    '/children' => ChildrenController::class,
]);
Route::resource('/child_progress', ChildProgressController::class);
Route::get('viewChildProgress',[ChildProgressController::class,'viewChildProgress'])->name('viewChildProgress');

Route::resource('/ChildWeightStats', ChildWeightStatsController::class);

Route::resource('/frequently_asked_questions', FrequentlyAskedQuestionsController::class);
Route::get('/diseases', function () {
    return view('Diseases.diseases');
})->name('diseases');
