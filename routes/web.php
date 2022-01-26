<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuildController;
use Illuminate\Support\Facades\Route;

use App\Models\Player;
use App\Models\Guild;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Request;
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

Route::get('/map', function () {
    return Inertia::render('Map');
});

Route::get('/players', function () {
    return Inertia::render('Players', [
        'players' => Player::query()
        ->when(Request::input('search'), function ($query, $search){
            $query->where('player_name', 'like', "%{$search}%");
        })
        ->paginate(20)
        ->withQueryString()
    ]);
});

Route::get('admin/index', [AdminController::class, 'index']);

Route::get('admin/users', [AdminController::class, 'users']);

Route::get('admin/logs', [AdminController::class, 'logs']);

Route::get('players/{id}', [PlayerController::class, 'getByUuid']);

Route::get('guilds/{id}', [GuildController::class, 'getGuildById']);

Route::get('/guilds', function () {
    return Inertia::render('Guilds', [
        'guilds' => Guild::query()
        ->when(Request::input('search'), function ($query, $search){
            $query->where('guild_name', 'like', "%{$search}%");
        })
        ->paginate(20)
        ->withQueryString()
    ]);
});

Route::post('/logout', function() {
    dd('logging the user out');
});
