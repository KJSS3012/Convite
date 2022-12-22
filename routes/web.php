<?php

use App\Http\Controllers\Presentes;
use App\Models\Convidado;
use App\Models\Presente;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $presentes = Presente::all();
    return view('welcome',[
        'presentes'=> $presentes,
    ]);
});

Route::post('/confirm',[Presentes::class, 'store']);

Route::get('/admin/kaique/karol/leo',function(){
    $presentes = Presente::all();
    $convidados = Convidado::all();
    return view('admin.dashboard',[
        'presentes' => $presentes,
        'convidados' => $convidados
    ]);
});