<?php

Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('entrar', 'IndexController@login');
Route::get('cadastrar', 'IndexController@register');

Route::get('home', 'HomeController@index')->name('home');

Route::resource('pacientes', 'PacientesController');

Route::resource('medicos', 'MedicosController');

Route::resource('agendamentos', 'AgendamentosController');