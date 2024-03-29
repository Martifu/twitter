<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/base', function () {
    return view('base');
});

Route::get('/inicio', function (){
   return view('Inicio');
});

Route::get('/guardado', function (){
    return view('guardado');
});


Route::get('/profile', function (){
    return view('perfil');
});
Route::get('/lists', function (){
    return view('lists');
});


Route::get('/login',function (){
   return view('login');
});

Route::get('/register',function (){
   return view('register');
});

Route::get('/notificaciones',function (){
   return view('notificaciones');
});

Route::get('/tendencia',function (){
   return view('tendencia');
});


