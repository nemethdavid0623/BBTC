<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BefizController;
use App\Http\Controllers\UgyfelController;

Route::get('/allUgyfel', [UgyfelController::class, 'index']);
Route::get('/ugyfelBefiz', [UgyfelController::class, 'show']);
Route::post('/newUgyfel', [UgyfelController::class, 'store']);
Route::post('/newBefiz', [BefizController::class, 'store']);
Route::delete('/deleteBefiz', [BefizController::class, 'destroy']);
Route::put('/updateBefiz', [UgyfelController::class, 'update']);
