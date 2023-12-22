<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('clients.index')->with('products', $products);
    }

    
    public function cart(){
        return view('clients.cart');
    }


    public function huong_dan_thanh_toan(){
        return view('clients.pages.huong_dan_thanh_toan');
    }
    public function chinh_sach_bao_hanh(){
        return view('clients.pages.chinh_sach_bao_hanh');
    }
    public function chinh_sach_van_chuyen(){
        return view('clients.pages.chinh_sach_van_chuyen');
    }




    public function pc_sao_choi(){
        return view('clients.collections.pc_sao_choi');
    }
   



    public function trang_tri_pc(){
        return view('clients.collections.trang_tri_pc');
    }
    



    public function man_hinh_may_tinh(){
        return view('clients.collections.man_hinh_may_tinh');
    }
    
    


    public function mainboard(){
        return view('clients.collections.mainboard');
    }
    

}
