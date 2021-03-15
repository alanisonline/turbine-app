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

Route::get('/', function () {
    $bingApiKey = env('BING_MAP_API_KEY');
    $url = "https://dev.virtualearth.net/REST/V1/Imagery/Map/Aerial/55.923528%2C-3.399739/16?mapSize=500,500&format=png&key={$bingApiKey}";
            
    $img = "assets/img/map-texture.png";

    file_put_contents($img, file_get_contents($url));
    
    return view('welcome');
});
