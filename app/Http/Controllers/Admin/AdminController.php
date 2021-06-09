<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Count;

class AdminController extends Controller
{
    public function index()
    {
        $votes = Vote::get();
        $counts = Count::get();

        return view('admin.index', compact('votes', 'counts'));
    }
}
