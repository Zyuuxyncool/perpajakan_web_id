<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProfilService;
use App\Services\DocumentService;
use App\Services\UserService;

class ProfilController extends Controller
{

    protected $profilService, $userService;
    public function __construct()

    {
        $this->profilService = new ProfilService();
        $this->userService = new UserService();
    }

    public function index()

    {
        $profil = $this->profilService->find(auth()->user()->id, 'user_id');
        return view('user.profil.index', compact('profil'));
    }



    public function update(Request $request)
    {
        $filename = DocumentService::save_file($request, 'file_foto', 'public/images/profil_user');
        if ($filename !== '') $request->merge(['photo' => $filename]);
        $profil = $this->profilService->find(auth()->user()->id, 'user_id');
        $profil = $this->profilService->update($request->all(), $profil->id);
        // $user = $this->userService->update($request->all(), $profil->user_id);
        return redirect()->back()->with('success', 'Profil berhasil diupdate');
    }
}