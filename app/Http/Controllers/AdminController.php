<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use App\Models\Medal;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Index');
    }

    public function users()
    {
        return Inertia::render('Admin/Users');
    }

    public function medals()
    {
        $medals = Medal::all();
        return Inertia::render('Admin/Medals/List', ['medals' => $medals]);
    }

    public function createMedal()
    {
        $medal_cats = DB::table('awards_cats')->orderBy('position', 'desc')->get();
        return Inertia::render('Admin/Medals/Create', ['medal_cats' => $medal_cats]);
    }

    public function editMedal(Medal $medal)
    {
        return Inertia::render('Admin/Medals/Edit', 
        [
            'medal' => [
                'id' => $medal->id,
                'title' => $medal->title,
                'enabled' => $medal->enabled,
                'category_id' => $medal->category_id,
                'position' => $medal->position,
                'icon_path' => $medal->icon_path,
                'description' => $medal->description,
                'award_count' => $medal->award_count,
            ],
            'medal_cats' => DB::table('awards_cats')
                            ->orderBy('position')
                            ->get()
        ]);
    }

    public function logs()
    {

        $json = Storage::disk('logs')->get('task.log');
        $json = json_decode($json, true);
        //dd($json);
        return Inertia::render('Admin/Logs', ['data' => $json]);
    }
}
