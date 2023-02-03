<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){

        $comics = Comic::all();

        return view("admin.dashboard", compact('comics'));
    }
}