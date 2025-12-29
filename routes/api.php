<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\IdolVenueController;
use App\Http\Controllers\IdolMemberController;
use App\Http\Controllers\IdolEventController;


// 一覧表示
Route::get('/goals', [GoalController::class, 'index']);
// 詳細
Route::get('/goals/{id}', [GoalController::class, 'show']);
// 登録
Route::post('/goals', [GoalController::class, 'store']);
// 更新
Route::put('/goals/{id}', [GoalController::class, 'update']);
// 削除
Route::delete('/goals/{id}', [GoalController::class, 'destroy']);

Route::get('/idol/venues', [IdolVenueController::class, 'index']);
Route::post('/idol/venues', [IdolVenueController::class, 'store']);

Route::get('/idol/members', [IdolMemberController::class, 'index']);
Route::post('/idol/members', [IdolMemberController::class, 'store']);

Route::get('/idol/events', [IdolEventController::class, 'index']);
Route::post('/idol/events', [IdolEventController::class, 'store']);
Route::get('/idol/events/{id}', [IdolEventController::class, 'show']);