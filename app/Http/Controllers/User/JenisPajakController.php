<?php 

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class JenisPajakController extends Controller
{
    public function index()
    {
        return view('user.jenis_pajak.index');
    }
}