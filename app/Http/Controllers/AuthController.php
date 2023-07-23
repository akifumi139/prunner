<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('auth');
    }

    public function login(AuthRequest $request)
    {
        return redirect()->route('timeline.index');
    }
}
