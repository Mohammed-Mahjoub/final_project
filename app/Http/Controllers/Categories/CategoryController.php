<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $categories = Category::orderby('created_at' , 'DESC')->get();
        $stores = Store::orderby('created_at' , 'DESC')->get();
        foreach ($categories as $category) {
           $categoryId = $category->id;
           $countstores = DB::table('categories')->where('category_id' , $categoryId);
        }

        return view('categories.index')->with('stores', $stores)->with('categories', $categories)->with('user' , $user);
    }

  

    public function create()
    {
        $user = Auth::user();
        return view('categories.create')->with('user', $user);
    }


    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|max:255',
            'address' => 'nullable|max:255',
            'photo' => 'required|image',
        ]);
        $photo = $request->photo;
        $newPhoto = time().$photo->getClientOriginalName();
        $photo->move('uploads/categories/' , $newPhoto);

        $category = Category::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'address' => $request->address,
            'photo' => 'uploads/categories/'.$newPhoto,
        ]);

        return redirect()->route('categories')->with('message', 'تم اضافة الفئة بنجاح ');


    }

    
    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = Category::find($id);
        $user = Auth::user();

        if($category == null){
            return redirect()->back();
        }

        return view('categories.edit')->with('category', $category)->with('user', $user);

    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $this->validate($request , [
            'name' => 'required',
            'address' => 'required',
        ]);


        if($request->has('photo')){
            $photo = $request->photo;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/categories/' , $newPhoto);
            $category->photo = 'uploads/categories/'.$newPhoto;
        }


        $category->name = $request->name;
        $category->address = $request->address;
        $category->save();

        // return redirect()->bake()->with('message', 'Success Update New Category');
        return redirect()->route('categories')->with('message', 'تم تعديل الفئة بنجاح ');

    }




    public function destroy($id)
    {
        $category = Category::find($id);
        if($category == null){
            return redirect()->back();
        }
        $category->delete();
        return redirect()->back();
    }


}
