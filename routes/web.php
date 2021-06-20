<?php

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
Route::get('/usuarios', function () {
    /*  $user = new  App\Models\Usuario();
    $user->nome = "Teste";
    $user->cpf = "02342288140";
    $user->senha = bcrypt("123456");
    $user->email = "admin@admin.com.br";
    $user->email_verificado_em = now();
    $user->save();
    Buscas:
    all(); -- TODOS
    find(x) -- Pelo ID;
    where(''condição, 'valor')->get();
    paginate(x) -- Pelo ID;

    */
    return  App\Models\Usuario::paginate(10);
});
