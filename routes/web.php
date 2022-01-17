<?php

use Illuminate\Support\Facades\Route;

use App\Models\Player;
use App\Models\Guild;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::get('/players', function () {
    
    return Inertia::render('Players', [
        'players' => Player::paginate(20)
    ]);
});

Route::get('guilds', function(){
    return view('guilds', [
        'guilds' => Guild::all()
    ]);
});

Route::post('/logout', function() {
    dd('logging the user out');
});
