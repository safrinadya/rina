<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function product()
    {
        return view('list_product', compact('products'));
    }
}
