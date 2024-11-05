<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// 認証ルート
// require __DIR__.'/auth.php';

// アプリケーションルート
Route::get('/{any}', [Controller::class, 'index'])->where('any', '.*'); // すべてのリクエストをこのルートにルーティング
