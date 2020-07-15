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
        $domain = $this->domain;
        $product_hot_view=DB::table('product')->orderBy('view','desc')->take(3)->get();
            $product         =DB::table('product')->orderBy('created', 'desc')->take(8)->get();
        $product_hot     = DB::table('product')->where('hot_product', 1)->orderBy('created', 'desc')->take(3)->get();
        return view('home.home',compact('product_hot','domain','product','product_hot_view'));

    }
    public function get_product_ajax($id){
        echo $id;die;

    }
    public function product(){
        $domain  = $this->domain;
        $product =DB::table('product')->orderBy('created', 'desc')->get();
        return view('home.product',compact('product','domain'));
    }
    public function product_detail(Request $req){
        $domain  = $this->domain;
        $product = product::where([
            ['slug_name', '=', $req->slug]
        ])->get();
        $category_list = $product[0]->category_id;

        $product_list =  product::where([
            ['category_id', '=', $category_list]
        ])->get();
        return view('home.product_detail',compact('product','domain','product_list'));
    }
}
