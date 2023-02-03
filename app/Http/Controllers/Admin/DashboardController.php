<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){

        $comics = Comic::all();

        $lastComics = Comic::orderBy("created_at", "DESC")->limit(5)->get();

        return view("admin.dashboard", compact('comics', 'lastComics'));
    }
}