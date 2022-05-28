<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Manage_Categories_Post;

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
        return view('product');
    }
    public function manage_products()
    {
        return view('manage_products');
    }
}
