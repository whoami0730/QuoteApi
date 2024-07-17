<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\QuoteCategoryController;
use App\Http\Controllers\DeviceIdController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------------All Category---------------------------------
Route::get('allCategory',[QuoteCategoryController::class,'Categoires']);
// --------------------all_word-------------------------------------
Route::get('all_words',[WordController::class,'APIALLWORS']);
// --------------------all_Quote------------------------------------
Route::get('all_quotes',[QuoteController::class,'APIQUOTES']);
// --------------------Both Show -----------------------------------
Route::get('both',[WordController::class,'API']);
//---------------------Quotes s Categoires--------------------------
Route::post('categories',[QuoteController::class,'get_id']);
// -------------------Today Quote-----------------------------------
Route::get('today',[QuoteController::class,'today']);
//--------------------Add Device-Id--------------------------------
Route::post('addDeviceId',[DeviceIdController::class,'addDeviceId']);
