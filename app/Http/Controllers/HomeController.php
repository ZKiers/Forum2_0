<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use Illuminate\View\View;

class HomeController extends Controller
{
    function index() : view {
        $threads = Thread::with('user')
            ->withCount('topics')
            ->get();

        return view('home.index', compact('threads'));
    }
}
