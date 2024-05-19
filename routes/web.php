<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/product', function () {
    return view('list_product');
});