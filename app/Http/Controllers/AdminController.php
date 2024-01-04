<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use App\Models\Medal;

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
        return Inertia::render('Admin/Medals', ['medals' => $medals]);
    }

    public function createMedal()
    {
        return Inertia::render('Admin/Medals/New');
    }

    public function logs()
    {

        $json = Storage::disk('logs')->get('task.log');
        $json = json_decode($json, true);
        //dd($json);
        return Inertia::render('Admin/Logs', ['data' => $json]);
    }
}
