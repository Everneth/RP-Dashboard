<?php

namespace App\Http\Controllers;

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
                ->firstOrFail()
        ]);
    }
}
