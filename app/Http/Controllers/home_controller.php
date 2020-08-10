<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\product;
use App\category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Intervention\Image\ImageManagerStatic as Image;

class home_controller extends Controller
{
    public function index(){
        // $domain = $this->domain;
        // $product_hot_view=DB::table('product')->orderBy('view','desc')->take(3)->get();
        //     $product         =DB::table('product')->orderBy('created', 'desc')->take(8)->get();
        // $product_hot     = DB::table('product')->where('hot_product', 1)->orderBy('created', 'desc')->take(3)->get();
        return view('home.home');

    }
}
