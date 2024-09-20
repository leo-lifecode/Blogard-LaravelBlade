<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ["cutty" => "hello cutty"];
    return view('Home', $data)
        ->with(["title" => "hello title"])
        ->with(["kitty" => "hello kitty"]);
});

Route::get('/test', function () {
    return view('test');
});
