<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function index($id)
    {
        $user = Auth::user();
        $stores = Store::where('category_id' , $id)->get();
        if($stores == null){
            return view('products.index')->with('user' , $user)->with('message', 'Sorry, Not Found Any Store of this Category');
        }


        $category = Category::where('id' , $id)->get();
        $nameCategory = '';
        foreach($category as $item)
        {
            $nameCategory = $item->name;
        }

        return view('products.index')->with('stores' , $stores)->with('user' , $user)->with('nameCategory', $nameCategory);

    }


    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);
        $search = $request->search;
        $filtersStores = Store::where('name' , 'like' , '%' . $search . '%')->get();
        $user = Auth::user();

            if($filtersStores){
                return view('products.search')->with('user' , $user)->with('stores', $filtersStores);
            }else{
                return view('products.search')->with('user' , $user)->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');
            }
            return view('products.search')->with('user' , $user)->with('message', 'عذر , لا يوجد منتج بهذا الاسم ');


    }

    
    public function flagProuct(Request $request , $id){
        $flag = $request->flag;
        $item = Store::find($id);


            if(!empty($request->flag)){
                if( $request->flag == "on" ){
                    $flag = 1;
                }else {
                    $flag = 0;
                }
            }else{
                $flag = 0;
            }
            $item->flag = $flag;
            $item->save();

        return redirect()->back();
    }


    public function create(){
        $user = Auth::user();
        $categories = Category::all();
        return view('products.create')->with('user' , $user)->with('categories', $categories);
    }








    public function store(Request $request){
        $this->validate($request , [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|image',
            'price_after_discount' => 'required',
            // 'flag' => 'required',

        ]);
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/stores/' , $newPhoto);

        if(!empty($request->flag)){
            if( $request->flag == "on" ){
                $flag = 1;
            }else {
                $flag = 0;
            }
        }else{
            $flag = 0;
        }
        $store = Store::create([
            'category_id' => $request->category_id,
            'name' =>  $request->name,
            'description' =>  $request->description,
            'price' =>  $request->price,
            'photo' =>  'uploads/stores/'.$newPhoto,
            'price_after_discount' =>  $request->price_after_discount,
            'flag' => $flag,
        ]);
        return redirect()->back()->with('message', 'تم اضافة المنتج بنجاح ');
        
    }










    public function edit($id)
    {
         $categories = Category::all();
        $store = Store::find($id);
        $user = Auth::user();
        if(!$store) abort(404);

        return view('products.edit')->with('user', $user)->with('store', $store)->with('categories', $categories);
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        // dd($request);
        $this->validate($request , [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'price_after_discount' => 'required',
        ]);
        if($request->has('photo')){
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/stores/' , $newPhoto);
            $store->photo = 'uploads/stores/'.$newPhoto;
        }

        $store->category_id = $request->category_id;
        $store->name = $request->name;
        $store->description = $request->description;
        $store->price = $request->price;
        $store->price_after_discount = $request->price_after_discount;
        if(!empty($request->flag)){
            if( $request->flag == "on" ){
                $flag = 1;
            }else {
                $flag = 0;
            }
        }else{
            $flag = 0;
        }
        $store->flag = $flag;
        $store->save();

        return redirect()->back()->with('message', 'تم تعديل  المنتج بنجاح ');;

    }


    public function destroy($id)
    {
        $store = Store::find($id);
        if($store == null){
            return redirect()->back();
        }
        $store->delete();
        return redirect()->back();
    }

}
