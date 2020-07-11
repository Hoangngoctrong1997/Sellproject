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

        $product_hot     = DB::table('product')->where('hot_product', 1)->orderBy('created', 'desc')->take(3)->get();
        $domain ='/images/img/demo/';
        return view('home.home',compact('product_hot','domain'));

    }
}
