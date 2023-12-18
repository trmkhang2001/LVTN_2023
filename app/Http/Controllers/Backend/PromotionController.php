<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromotionController extends Controller
{
    //
    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotion.index', compact('promotions'));
    }
    public function create()
    {
        return view('admin.promotion.create');
    }
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'percent' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
        ])->validate();
        Promotion::create([
            'name' => $request->name,
            'percent' => $request->percent,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.page.promotion.index')->with('success', 'Add Category Success');
    }
}
