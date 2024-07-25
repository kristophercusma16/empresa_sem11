<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::resource('personas','App\Http\Controllers\PersonasController')->names('personas');

// Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas')->middleware('auth');

// Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
// Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
// Route::get('personas/{nPerCodigo}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
// Route::patch('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
// Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
// Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
// Route::delete('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');

Route::view('contacto', 'contacto')->name('contacto');
Route::post('contacto', 'App\Http\Controllers\ContactoController@store');

Auth::routes(['register'=> true]);

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
