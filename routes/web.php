<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BadWord;

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

Route::view('/form', 'pages.form')->name("formPage");
Route::post("/form/post","RequestForm@post")->middleware("bad");

Route::get('/db/{id}', "RequestForm@index")->name('db');

Route::view('welcome', 'welcome');

Route::get('/', "Test@index")->name('anasayfa');

Route::get("/user/{name}","Test@user")->name("user");

Route::get("/age/{birthYear}",function($age){
    return date("Y")-$age. "Yaşındasınız.";
})->where("birthYear", "[0-". date("year") ."]+")->name("agePage");

Route::get("/name/{name}",function($name){
    return "Adınız " . $name;
})->where("name", "[A-Za-z]+")->name("namePage");

Route::get("/user/{age}/{name}",function($age,$name){
    return "Yaşınız " .$age ." <br> Adınız ".$name;
})->where(["age"=>"[0-120]+" , "name"=>"[A-Za-z]+"])->name("userPage");
