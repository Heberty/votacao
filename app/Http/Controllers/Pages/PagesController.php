<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;

class PagesController extends Controller
{
    public function index()
    {
        $votes = Vote::get();
        
        return view('pages.index', compact('votes'));
    }
}
