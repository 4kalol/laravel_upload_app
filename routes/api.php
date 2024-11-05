<?php

use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 画像アップロード
Route::get('/image/get', [ImageController::class, 'get']);
Route::post('/image/upload', [ImageController::class, 'upload']);

