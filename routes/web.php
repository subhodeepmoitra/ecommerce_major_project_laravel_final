<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\accountController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;







///////////////////////////////////// USER PANEL RELAY ROUTES /////////////////////////////////////////////////////

Route::get('/', [App\Http\Controllers\UserControllers::class, 'products'])->name('products');

Route::get('/account', function () {
    return view('useraccount');
});

Route::post("/login",[UserControllers::class,'login']);
Route::get('/login', function () {
    return view('userlogin');
});

Route::post("/signup",[UserControllers::class,'signup']);
Route::get('/signup', function () {
    return view('usersignup');
});

Route::get('/about', function () {
    return view('userabout');
});
















/////////////////// admin ///////////////////////////

Route::get('/admin', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('home');

Route::get('/categories', [App\Http\Controllers\HomeController::class, 'admincategories'])->name('categories');

Route::get('/manage_categories', [App\Http\Controllers\HomeController::class, 'adminmanage_categories'])->name('manage_categories');

Route::put('store-categories-form',[
    HomeController::class,'storecategories'
]);

Route::get('/products', [App\Http\Controllers\HomeController::class, 'adminproduct'])->name('products');

Route::get('/manage_products', [App\Http\Controllers\HomeController::class, 'adminmanage_products'])->name('manage_products');

Route::put('store-products-form',[
    HomeController::class,'storeproducts'
]);

//Route::get('delete/{id}','HomeController@productdestroy');

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminproductdestroy'])->name('productdestroy');



Route::group(['middleware' => ['prevent-back-history']],function(){
    Auth::routes();
    Route::get('logout', function ()
{
    $session_id = Session::getId();
    session()->forget($session_id);
    //Auth::logout();
    //session_unset();
    return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');

    //these attempts will not remove values from the session.....

    //session()->forget('db');
    //Session::flush();
})->name('logout');

});

