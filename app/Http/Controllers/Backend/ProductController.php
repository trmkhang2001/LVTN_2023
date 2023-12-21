<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products =  Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categorys = Category::all();
        $promotions = Promotion::all();
        return view('admin.product.create', compact('categorys', 'promotions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required',
            'name' => 'required',
            'avatar' => 'image|mimes:png,jpg,jpeg|max:10000',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'status' => ' required',
            'category' => 'required',
        ]);
        if ($request->avatar) {
            $file = $request->avatar;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $request->avatar->move(public_path('images'), $name);
        };
        Product::create([
            'sku' => $request->sku,
            'img' => $name,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'quantity' => $request->quantity,
            'id_promotion' => $request->promotion,
            'id_category' => $request->category,
        ]);
        return redirect()->route('admin.page.product.index')->with('success', 'Add Product Success');
    }
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categorys = Category::all();
        $promotions = Promotion::all();
        return view('admin.product.create', compact('product', 'categorys', 'promotions'));
    }
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        if ($request->avatar) {
            $file = $request->avatar;
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $request->avatar->move(public_path('images'), $name);
            $product->update([
                $request->all(),
                'img' => $name
            ]);
        };
        return redirect()->route('admin.page.product.index')->with('success', 'Update Product Success');
    }
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.page.product.edit')->with('success', 'Delete Product Success');
    }
}
