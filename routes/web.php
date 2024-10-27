<?php

use Illuminate\Support\Facades\Route;

// 認証ルート
// require __DIR__.'/auth.php';

// アプリケーションルート
Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*'); // すべてのリクエストをこのルートにルーティング
