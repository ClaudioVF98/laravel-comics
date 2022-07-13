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
    $comicsArr = config('comics');
    $navBar = config('nav');
    return view('home', ['comicsArr' => $comicsArr,], ['navBar' => $navBar]);
});

Route::get('/{id}', function ($id) {
    $comic = null;
    $navBar = config('nav');
    $comicsArr = config('comics');
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comic = $value;
            break;
        }
    }

    if ($comic) {
        return view('comic', ['pageTitle' => 'Fumetto', 'comic' => $comic, 'navBar' => $navBar]);
    } else {
        abort(404);
    }

})->name('comic');

