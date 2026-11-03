<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;
Route::get('/', function () {
    return view('welcome');
});
//route atau alamat untuk buka form
Route::get('/items/create',[itemController::class,'create']);


//route untuk menyimpan inputan form
Route::post('/items/store',[itemController::class,'store'])->name('items.store');
// di file create ubah action
//---> <form action="{{ route('items.store') }}" method="POST">