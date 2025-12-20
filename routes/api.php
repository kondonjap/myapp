<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;

Route::get('/goals', [GoalController::class, 'index']);
Route::post('/goals', [GoalController::class, 'store']);
