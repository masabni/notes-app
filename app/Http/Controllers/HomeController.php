<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'notes' => Note::published()->latest()->with('user')->limit(50)->get()
        ]);
    }
}
