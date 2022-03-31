<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return response()->json(
            [
                'status' => 'success',
                'products' => $product->toArray()
            ], 200);
    }
    public function show(Request $request, $id)
    {
        $product = Product::find($id);
        return response()->json(
            [
                'status' => 'success',
                'product' => $product->toArray()
            ], 200);
    }

}

