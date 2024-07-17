<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteCategoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\AdminController;

// Admin View Pages
Route::view('/dashboard','admin.dashboard')->middleware('AdminGuard');
Route::view('/add_category','admin.add_category')->middleware('AdminGuard');
Route::view('/show_category','admin.show_category')->middleware('AdminGuard');
Route::view('/add_quote','admin.add_quote')->middleware('AdminGuard');
Route::view('/show_quote','admin.show_quote')->middleware('AdminGuard');
Route::view('/add_word','admin.add_word')->middleware('AdminGuard');
Route::view('/show_word','admin.show_word')->middleware('AdminGuard');
Route::view('/admin_quote_login','admin.admin_quote_login');

Route::controller(QuoteCategoryController::class)->group(function () {
    Route::post('add_category', 'add_category')->middleware('AdminGuard');
    Route::get('show_category', 'show_category')->middleware('AdminGuard');
    Route::post('edit_category/{id}', 'edit_category')->name('edit_category')->middleware('AdminGuard');
    Route::get('delete_category/{id}', 'delete_category')->middleware('AdminGuard');
    Route::get('dashboard', 'showCount')->middleware('AdminGuard');
});


Route::controller(QuoteController::class)->group(function () {
    Route::get('add_quote', 'show_category')->middleware('AdminGuard');
    Route::post('add_quote', 'add_quote')->middleware('AdminGuard');
    Route::get('show_quote', 'show_quote')->middleware('AdminGuard');
    Route::post('edit_quote/{id}', 'edit_quote')->name('edit_quote')->middleware('AdminGuard');
    Route::get('delete_quote/{id}', 'delete_quote')->middleware('AdminGuard');
   
});



Route::controller(WordController::class)->group(function () {
    Route::post('add_word', 'add_word')->middleware('AdminGuard');
    Route::get('show_word', 'show_word')->middleware('AdminGuard');
    Route::post('edit_word/{id}', 'edit_word')->name('edit_word')->middleware('AdminGuard');
    Route::get('delete_word/{id}', 'delete_word')->middleware('AdminGuard');

});


//Admin Login Route

Route::get('/logout',function(){
    if(session()->has('admin')){
          session()->pull('admin');
          return redirect('admin_quote_login');

    }
    else{
          return redirect('admin_quote_login');
    }
})->middleware('AdminGuard');

Route::controller(AdminController::class)->group(function () {
    Route::post('admin_quote_login', 'admin_quote_login');
   
    
   
});