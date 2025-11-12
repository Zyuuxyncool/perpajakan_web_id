<?php 

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class TujuanPajakController extends Controller
{
    public function index()
    {
        return view('user.tujuan_pajak.index');
    }
}