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
    $navList = config('navbar');
    $comics = config('comics');
    $mainNavCards = config('mainNavCards');
    $comicsFooter = config('comicsFooter');
    $dcFooter = config('dcFooter');
    $sitesFooter = config('sitesFooter');
    $shopFooter = [
        [
            "url" => "#",
            "text" => "Shop DC"
        ],
        [
            "url" => "#",
            "text" => "Shop DC Collectibles"
        ]
        ];
    $data = [
        "navList" => $navList,
        "comics" => $comics,
        "mainNavCards" => $mainNavCards,
        "comicsFooter" => $comicsFooter,
        "dcFooter" => $dcFooter,
        "sitesFooter" => $sitesFooter,
        "shopFooter" => $shopFooter
    ];
    return view('guest.comics', $data);
})->name('comics-page');

Route::get('/detail', function () {
    $navList = config('navbar');
    $comics = config('comics');
    $mainNavCards = config('mainNavCards');
    $comicsFooter = config('comicsFooter');
    $dcFooter = config('dcFooter');
    $sitesFooter = config('sitesFooter');
    $shopFooter = [
        [
            "url" => "#",
            "text" => "Shop DC"
        ],
        [
            "url" => "#",
            "text" => "Shop DC Collectibles"
        ]
        ];
    $data = [
        "navList" => $navList,
        "comics" => $comics,
        "mainNavCards" => $mainNavCards,
        "comicsFooter" => $comicsFooter,
        "dcFooter" => $dcFooter,
        "sitesFooter" => $sitesFooter,
        "shopFooter" => $shopFooter
    ];
    return view('guest.detail', $data);
})->name('comics-product-page');