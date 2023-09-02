<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return 'welcome';//должен был вернуть вьюху view("welcome")
});

Route::get('/test_page', function (){
    return "this is a test page";
});

Route::get('/test_page/1', function(){
    return "this is a test 1 page";
});

Route::get('/haha', function(){
    return "some haha page";
});

Route::get('/hehe', function(){
    return "some hehe page";
});

Route::get("/zaebal", function (){
    return "some zaebal page";
});

Route::get("/net/ti/zaebal", function(){
    return "net ti zaebal page";
});
