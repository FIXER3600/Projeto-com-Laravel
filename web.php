<?php

use Illuminate\Support\Facades\Route; use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
| adicionar rotas no server
| 
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/userlist', 
function () {
for($contador = 0; $contador < 50; $contador++){
$umUsuarioQualquer = new User;
$umUsuarioQualquer->name = 'umUser'.$contador;
$timestamp = date("Y-m-d-h-i-sa");
$umUsuarioQualquer->email = "email".$contador."@emailTeste.com".$timestamp;
$umUsuarioQualquer->password = '123';
$umUsuarioQualquer->save(); }
return User::all(); 
});
