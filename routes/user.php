<?php

use Illuminate\Support\Facades\Route;

// Landing page publik
Route::get('/', [App\Http\Controllers\User\LandingPageController::class, 'index'])->name('beranda');

// Redirect /user ke landing
Route::redirect('/', '/beranda')->name('user');

Route::get('/beranda', [App\Http\Controllers\User\LandingPageController::class, 'index'])->name('user.beranda.index');
Route::get('/regulation', [App\Http\Controllers\User\RegulationController::class, 'index'])->name('user.regulation.index');
Route::get('/tujuan_pajak', [App\Http\Controllers\User\TujuanPajakController::class, 'index'])->name('user.tujuan_pajak.index');
Route::get('/manfaat_pajak', [App\Http\Controllers\User\ManfaatPajakController::class, 'index'])->name('user.manfaat_pajak.index');
Route::get('/jenis_pajak', [App\Http\Controllers\User\JenisPajakController::class, 'index'])->name('user.jenis_pajak.index');
Route::get('/kewajiban_pajak', [App\Http\Controllers\User\KewajibanPajakController::class, 'index'])->name('user.kewajiban_pajak.index');


// Route /user/landing publik

// Group route user yang butuh login
Route::prefix('/user')->middleware(['auth'])->name('user.')->group(function () {
    Route::get('/profil', [App\Http\Controllers\User\ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profil', [App\Http\Controllers\User\ProfilController::class, 'update'])->name('profil.update');
});
