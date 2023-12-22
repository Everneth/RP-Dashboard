<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Medal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{


    public function getByUuid(Request $request, $uuid)
    {
        //$path = 'http://play.everneth.com:7598/stats/'.$uuid;
        //$response = Http::get($path);
        $medals = $this->getMedals($uuid);
        return Inertia::render('Player', [
            //'response_data' => $response->object(),
            'medals' => $medals,
            'player' => Player::query()
                ->where('player_uuid', '=', $uuid)
                ->firstOrFail()
        ]);
    }

    public function getMedals($uuid)
    {
        $player = DB::table('players')->where('player_uuid', '=', $uuid)->first();
        return DB::table('awards_awarded')
        ->join('awards_awards', 'awards_awarded.award_id', '=', 'awards_awards.id')
        ->where('player_id', '=', $player->player_id)->get();
    }

    public function medals(): HasMany
    {
        return $this->hasMany(Medal::class);
    }

    private function processJson()
    {}
}