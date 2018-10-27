<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => "cliente"], function () {
    Route::get("/", "ClienteController@index");
});

