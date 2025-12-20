<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;

// 一覧表示
Route::get('/goals', [GoalController::class, 'index']);
// 詳細
Route::get('/goals/{id}', [GoalController::class, 'show']);
// 登録
Route::post('/goals', [GoalController::class, 'store']);
// 削除
Route::delete('/goals/{id}', [GoalController::class, 'destroy']);
