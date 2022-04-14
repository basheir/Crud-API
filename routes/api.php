<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('contacts',[ContactController::class, 'contacts']);
Route::post('addcontact',[ContactController::class, 'saveContact']);
Route::delete('deletecontact/{id}',[ContactController::class, 'deleteContact']);
Route::get('getcontact/{id}', [ContactController::class, 'getContact']);
Route::post('updatecontact/{id}', [ContactController::class, 'updateContact']);