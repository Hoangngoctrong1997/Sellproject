<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\product;
use App\category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Intervention\Image\ImageManagerStatic as Image;

class admin_controller extends Controller
{
    public function index(){
        $category = category::all();

        $product_table = DB::table('product')
            ->select('product.*','category.category_name')
            ->join('category','category.id','=','product.category_id')
            ->get();
        return view('admin.admin',compact('product_table','category'));

    }
    public function create_product(Request $req)
    {
        $product = new product();
        if($req->hasFile('fImage')):
            $image = $req->file('fImage');
            $filename=$image->getClientOriginalName();
            $image->move('images/img',$filename);
            $product->image_link = $filename;
        endif;
        $product->created = Carbon::now('Asia/Ho_Chi_Minh');
        $product->name = $req->product_name;
        $product->category_id = $req->category;
        $product->slug_name = Str::slug($req->product_name);;
        $product->price = $req->price;
        $product->discount = $req->discount;
        $product->view = 0;
        $product->discount = $req->discount;
        $product->active = $req->active;
        $product->hot_product = $req->hot_product;
        $product->description = $req->description;
        $product->content = $req->product_content;
        if($product->save())
            return redirect()->route('admin_index')->with('message','Thêm thành công');
        return redirect()->route('admin_index')->with('message','Thêm thất bại vui lòng thử lại sau');
    }
//    create category
    public function create_category(Request $req)
    {
        $category = new category();
        $category->created = Carbon::now('Asia/Ho_Chi_Minh');
        $category->category_name = $req->category_name;
        $category->slug = Str::slug($req->category_name);;
        $category->active = $req->category_active;
        $category->hot = $req->hot_category;
        if($category->save())
            return redirect()->route('admin_index')->with('message','Thêm thành công');
        return redirect()->route('admin_index')->with('message','Thêm thất bại vui lòng thử lại sau');
    }
}
