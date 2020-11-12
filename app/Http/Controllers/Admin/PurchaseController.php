<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\PurchaseAccount;
use App\Warehouse;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('purchase.index');
    }
    public function create()
    {
        $warehouses = Warehouse::orderBy('id','Desc')->get();
        $purchase_account_s = PurchaseAccount::orderBy('id','Desc')->get();
        return view('purchase.create',compact('warehouses','purchase_account_s'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function purchaseAccount($purchase_account){
        $purchase_account = PurchaseAccount::find($purchase_account);
        return response()->json($purchase_account);
    }
    public function productInformation($code){
        $product = Product::where('code',$code)->distinct()->get(['code','name']);
        $category = Product::where('code',$code)->get();
        return response()->json([$product,$category]);
    }
}
