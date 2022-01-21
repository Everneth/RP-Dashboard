<?php

namespace App\Http\Controllers;

use App\Models\Player;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class PlayerController extends Controller
{
    public function getByUuid(Request $request, $uuid)
    {
        $path = 'http://play.everneth.com:7598/stats/'.$uuid;
        $response = Http::get($path);
        return Inertia::render('Player', [
            'response_data' => $response->object(),
            'player' => Player::query()
                ->where('player_uuid', '=', $uuid)
                ->firstOrFail()
        ]);
    }

    private function processJson()
    {}
}