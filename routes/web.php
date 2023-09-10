<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AcessoMiddleware;
use App\Http\Controllers\VendedorController;
use App\Mail\MensagemTesteMail;


Route::get('login/{erro?}',[App\Http\Controllers\LoginController::class,'index'])->name('login');

Route::post('login',[App\Http\Controllers\LoginController::class,'autenticar'])
        ->name('login');

Route::middleware('acesso')->prefix('app')->group(function(){

        Route::get('sair}',[App\Http\Controllers\LoginController::class,'sair'])->name('sair');

        //Vendedores

        Route::resource('vendedor', 'App\Http\Controllers\VendedorController');

        //Vendas
        Route::resource('vendas','App\Http\Controllers\VendaController');
});

Route::get('mail-teste', function(){
Mail::to('testesuportemw@gmail.com')->send(new MensagemTesteMail());

return 'Email enviado';
});