<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(["prefix" => "cliente"], function () {
    Route::get("/", "ClienteController@index");
    Route::post("/salvar", "ClienteController@salvar");
    Route::post("/pesquisar", "ClienteController@pesquisar");
    Route::get("/{id}/edit", "ClienteController@editar");
});
Route::group(["prefix" => "categoria"], function () {
    Route::get("/", "CategoriaController@index");
});

