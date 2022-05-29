<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Manage_Categories_Post;

use App\Models\Manage_Products_Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard2');
    }
    public function categories()
    {
        return view('categories');
    }
    public function manage_categories()
    {
        return view('manage_categories');
    }
    public function storecategories(Request $request){
        $Manage_Categories_Post = new Manage_Categories_post;
        $Manage_Categories_Post->categories=$request->categories;
        $Manage_Categories_Post->save();
        return redirect('manage_categories')->with('status','Category Added');

    }
    public function product()
    {
       $products = DB::select ('SELECT * FROM manage__products__posts
       ');
       return view('product',['products'=>$products]);
    }
    public function manage_products()
    {
        return view('manage_products');
    }
    public function storeproducts(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
        $Manage_Products_Post = new Manage_Products_post;
        $Manage_Products_Post->name = $request->name;
        $Manage_Products_Post->mrp = $request->mrp;
        $Manage_Products_Post->price = $request->price;
        $Manage_Products_Post->qty = $request->qty;
        //$Manage_Products_Post->img_name = $request->file('img')->getClientOriginalName();
        //$Manage_Products_Post->img_path = $request->file('img')->store('images');
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $Manage_Products_Post['img_name']= $filename;
        }
        $Manage_Products_Post->short_desc = $request->short_desc;
        $Manage_Products_Post->description = $request->description;
        $Manage_Products_Post->meta_title = $request->meta_title;
        $Manage_Products_Post->meta_desc = $request->meta_desc;
        $Manage_Products_Post->meta_keyword = $request->meta_keyword;
        $Manage_Products_Post->save();
        return redirect('manage_products')->with('status','Product Added');
    }

    public function productdestroy($id) {
        DB::table('manage__products__posts')->where('id', '=', $id)->delete();
        //DB::delete('delete from manage__products__posts where id = ?',[$id]);
        return view('product');
        }
}
