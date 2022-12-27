<?php

use App\Models\Store;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PurchaseTransaction;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/categories' , 'Categories\CategoryController@index')->name('categories');
Route::get('/category/create' , 'Categories\CategoryController@create')->name('category.create');
Route::post('/category/store' , 'Categories\CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}' , 'Categories\CategoryController@edit')->name('category.edit');
Route::put('/category/update/{id}' , 'Categories\CategoryController@update')->name('category.update');
Route::get('/category/destroy/{id}' , 'Categories\CategoryController@destroy')->name('category.destroy');


Route::get('/stores/{id}' , 'Products\ProductsController@index')->name('stores');
Route::get('/store/create' , 'Products\ProductsController@create')->name('store.create');
Route::post('/store/store' , 'Products\ProductsController@store')->name('store.store');
Route::get('/store/edit/{id}' , 'Products\ProductsController@edit')->name('store.edit');
Route::put('/store/update/{id}' , 'Products\ProductsController@update')->name('store.update');
Route::get('/store/destroy/{id}' , 'Products\ProductsController@destroy')->name('store.destroy');
Route::post('/flagProuct/{id}' , 'Products\ProductsController@flagProuct')->name('flagProuct');
Route::post('/stores/search' , 'Products\ProductsController@search')->name('search');

Route::post('/users' , 'Users\UserController@search')->name('users');

Route::get('/report' , 'PurchaseTransactions\PurchaseTransactionsController@index')->name('report');

// home page
Route::get('/', function () {
            $categories = Category::orderby('created_at' , 'DESC')->get();
        $stores = Store::orderby('created_at' , 'DESC')->get();
        foreach ($categories as $category) {
           $categoryId = $category->id;
        }
        return view('welcome')
        ->with('stores', $stores)
        ->with('categories', $categories);

})->name('index');

// products

Route::get('/products/{id}' , function ($id) {
    $categories = Category::orderby('created_at' , 'DESC')->get();

    $stores = Store::where('category_id' , $id)->get();
    if($stores == null){
        return view('/publicwebsite/products')->with('message', 'Sorry, Not Found Any Store of this Category');
    }

    $category = Category::where('id' , $id)->get();
    // foreach($category as $item)
    // {
    //     $nameCategory = $item->name;
    // }

    return view('/publicwebsite/products')
    ->with('stores' , $stores);
    // ->with('nameCategory', $nameCategory);

})->name('products');

// Search
Route::post('/products/search' , function (Request $request) {


    $request->validate([
        'search' => 'required'
    ]);
    $search = $request->search;
    $filtersStores = Store::where('name' , 'like' , '%' . $search . '%')->get();

    if($filtersStores){
        return view('/publicwebsite/search')->with('stores', $filtersStores);
    }else{
        return view('/publicwebsite/search')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
    }
    return view('/publicwebsite/search')->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');

})->name('products.searchPublic');

Route::post('/addtocart' , function (Request $request) {
    $request->validate([
        'product_id' => 'required',
        'price' => 'required'
    ]);
    $product_id = $request->product_id;
    $price = $request->price;
    $purchaseTransaction = PurchaseTransaction::create([
        'product_id' => $product_id,
        'price' => $price,
    ]);
    return redirect()->back()->with('message' , 'Done Add To Cart');
})->name('addtocart');

