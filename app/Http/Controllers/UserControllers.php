<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Manage_Categories_Post;
use App\Models\Manage_Products_Post;
use App\Models\signup;
use Illuminate\Http\Request;
class UserControllers extends Controller
{
    ///////////////// user panel controller ///////////////////////

public function products() {
     $products = DB::select('select * from manage__products__posts');
    return view('userindex',['products'=>$products]);
}



public function userlogin(Request $req)
{
    $products = DB::select('select * from manage__products__posts');
    return view('userhome',['products'=>$products]);
}



public function usersignup(Request $req)
{
$signup=new Signup;
$signup->fname=$req->fname;
$signup->uname=$req->uname;
$signup->pnum=$req->pnum;
$signup->email=$req->email;
$signup->Password=Hash::make($req->Password);
$signup->conpass=Hash::make($req->conpass);
$signup->save();
return redirect('userhome')->with('status','Category Added');
//return view ('userhome');
}

}
