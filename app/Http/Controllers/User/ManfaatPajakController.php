<?php 

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class ManfaatPajakController extends Controller
{
    public function index()
    {
        return view('user.manfaat_pajak.index');
    }
}