<?php

namespace App\Http\Controllers\PurchaseTransactions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\PurchaseTransaction;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class PurchaseTransactionsController extends Controller
{
    public function index()
    {
        $categories = Category::orderby('created_at' , 'DESC')->get();
        $stores = Store::orderby('created_at' , 'DESC')->get();
        $productCart = PurchaseTransaction::withTrashed()->orderby('created_at' , 'DESC')->get();
        $productCartreport = DB::select("select product_id ,  sum(price) as total from purchase_transactions group by product_id order by total desc");

        return view('PurchaseTransaction.index')
        ->with('productCartreport', $productCartreport)
        ->with('productCart', $productCart)
        ->with('stores', $stores)
        ->with('categories', $categories);
    }

}
