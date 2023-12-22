<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(string $id)
    {
        $product = Product::findOrFail($id);
        // $categorys = Category::all();
        // $promotions = Promotion::all();
        return view('clients.products.index')->with('product', $product);
    }

    
}
