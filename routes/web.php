<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenefitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Benefit Routes
Route::get('/benefits', [BenefitController::class, 'getBenefits']);
Route::post('/benefits', [BenefitController::class, 'addBenefit']);
Route::get('/benefits/{id}', [BenefitController::class, 'getBenefitByID']);
Route::get('/benefits/delete/{id}', [BenefitController::class, 'deleteBenefit']);

