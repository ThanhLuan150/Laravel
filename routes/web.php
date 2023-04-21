<?php
namespace App\Http\Controllers;


use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Chào mừng cấc bạn đến với PNV
    <br>Mình là Lê Trương Thành Luân 
    <br> Lớp PNV24A
    <br>Mình là một người thân thiện';
});

Route::get('/xinchao',[UserController::class , 'Xinchao' ]);

Route::get('/user',[UserController::class , 'GetIndex']);


Route::get('/tinhtong',[UserController::class,'tinhtong']);

Route::post('/tinhtong',[UserController::class,'tinhtong']);


Route::get('/computeArea', [UserController::class, 'computeArea']);
Route::post('/computeArea', [UserController::class, 'computeArea']);

































Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
    echo $a*$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
    echo $a+$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
    echo $a-$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
    echo $a/$b;exit;
    
})->whereNumber('a')->whereNumber('b');