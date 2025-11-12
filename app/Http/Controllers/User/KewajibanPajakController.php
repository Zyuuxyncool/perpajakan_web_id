<?php 

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class KewajibanPajakController extends Controller
{
    public function index()
    {
        return view('user.kewajiban_perpajakan.index');
    }
}