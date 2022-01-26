<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

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

    public function logs()
    {
        return Inertia::render('Admin/Logs');
    }
}
