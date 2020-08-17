<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/football', function () {
//     return view('welcome');
// });

Route::get('/football', function () {
    return view('register');
});

Route::Resource('/footballs','RegisterController',[
    'names'=>[
    'index'=>'footballs',
    'store'=>'footballs.store',
    'edit'=>'editview',
    'update'=>'register.show',
    ]
]
);

