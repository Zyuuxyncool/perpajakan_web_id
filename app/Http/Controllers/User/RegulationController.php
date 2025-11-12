<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class RegulationController extends Controller
{
    public function index()
    {
        return view('user.regulation.index');
    }
}