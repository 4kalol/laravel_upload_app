<?php

namespace App\Http\Controllers;


class Controller
{
    public function index()
    {
        // トークンを作成
        $tokenByte = random_bytes(16);
        $csrfToken = bin2hex($tokenByte);

        return view('index', compact('csrfToken'));
    }
}
