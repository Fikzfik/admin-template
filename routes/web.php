<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index',[
        'sb_menu' => 'Mahasiswa',
        'sb_submenu' => 'mastermhs']
    );
});

Route::get('/mastermhs',[MasterController::class, 'mastermahasiswa']);
Route::get('/mastermk',[MasterController::class, 'mastermk']);
Route::get('/masterdosen',[MasterController::class, 'masterdosen']);
Route::get('/masterkelas',[MasterController::class, 'masterkelas']);

// Route::get('/jadwalkuliah',[PerkuliahanController::class, 'jadwalkuliah']);
// Route::get('/jadwalujian',[PerkuliahanController::class, 'jadwalujian']);
// Route::get('/absenmhs',[PerkuliahanController::class, 'absenmhs']);
// Route::get('/nilaimhs',[PerkuliahanController::class, 'nilaimhs']);

Route::post('/submitmhs', [MasterController::class,'submitmahasiswa']);
Route::post('/submitkelas', [MasterController::class,'submitkelas']);
Route::post('/submitdosen', [MasterController::class,'submitdosen']);
Route::post('/submitmk', [MasterController::class,'submitmk']);