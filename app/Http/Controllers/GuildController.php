<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Guild;
use Inertia\Inertia;

class GuildController extends Controller
{
    public function allGuilds()
    {

    }
    public function getGuildById($id)
    {
        return Inertia::render('Guild', [
            'guild' => Guild::query()
                ->where('guild_id', '=', $id)
                ->firstOrFail(),
            'guild_members' => DB::table('players')
            ->join('guild_members', 'players.player_id', '=', 'guild_members.player_id')
            ->select('players.*', 'guild_members.guild_rank')
            ->where('guild_members.guild_id', '=', $id)
            ->paginate(30)
            ->withQueryString()
        ]);
    }
}
