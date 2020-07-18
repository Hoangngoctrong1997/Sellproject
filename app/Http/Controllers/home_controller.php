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
        $id_req = $id;
        if($id_req =='hot_product'){
            $product = product::where('hot_product', '=',1)
                ->orderBy('created', 'desc')->take(8)->get();
        }
        elseif ($id_req =='sale'){
            $product =DB::table('product')->orderBy('discount', 'desc')->take(8)->get();
        }
        elseif($id_req =='hot_view'){
            $product = DB::table('product')->orderBy('view', 'desc')->take(8)->get();
        }
        return $product;
    }

    public function get_product_filter(Request $filter){
            $product = product::whereBetween('price', [$filter->lower, $filter->upper])->orderBy('price', 'desc')->get();

        return $product;
    }
    public function get_product_price_search(Request $price){
        $product = product::where('price', '<=', $price->price_search)->orderBy('price', 'desc')->get();

        return $product;
    }

    public function get_product_other_filter(Request $other_filter){
        if($other_filter->other_filter =='popular'){
            $product = DB::table('product')->orderBy('view', 'desc')->get();
        }
        elseif ($other_filter->other_filter =='up_to_down'){
            $product =DB::table('product')->orderBy('price', 'desc')->get();
        }
        elseif($other_filter->other_filter =='down_to_up'){
            $product = DB::table('product')->orderBy('price')->get();
        }

        return $product;
    }

    public function get_product_by_search_form(Request $search_form){

        $product_slug = str_slug($search_form->search_form);

        $product=product::where('slug_name','like', '%'.$product_slug.'%')
            ->orderBy('created', 'desc')
            ->get();

        return $product;
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
