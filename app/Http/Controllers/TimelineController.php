<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('timeline.index');
    }
}
