<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [App\Http\Controllers\HomeController::class, 'categories'])->name('categories');

Route::get('/manage_categories', [App\Http\Controllers\HomeController::class, 'manage_categories'])->name('manage_categories');

Route::put('store-categories-form',[
    HomeController::class,'storecategories'
]);

Route::get('/products', [App\Http\Controllers\HomeController::class, 'product'])->name('products');

Route::get('/manage_products', [App\Http\Controllers\HomeController::class, 'manage_products'])->name('manage_products');

Route::put('store-products-form',[
    HomeController::class,'storeproducts'
]);

//Route::get('delete/{id}','HomeController@productdestroy');

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'productdestroy'])->name('productdestroy');



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
