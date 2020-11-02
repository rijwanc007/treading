<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate(20);
        return view('product.index',compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $check = Product::where('code',$request->code)->where('category',$request->category)->first();
        if(empty($check)){
            $image = $request->file('image');
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/images/product/',$image_name);
            Product::create([
               'image' => $image_name,
               'code' => $request->code,
               'name' => $request->name,
               'category' => $request->category,
               'status' => $request->status,
            ]);
            Session::flash('success','Product Added Successfully');
            return redirect()->route('product_index');
        }else{
            Session::flash('error','Product Already Exists');
            return redirect()->back();
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = Product::find($id);
        return view('product.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $check = Product::where('id','!=',$id)->where('code',$request->code)->where('category',$request->category)->first();
        $update = Product::find($id);
        if(empty($check)){
           $image = $request->file('image');
           if(empty($image)){
               $update->update([
                   'code' => $request->code,
                   'name' => $request->name,
                   'category' => $request->category,
                   'status' => $request->status,
               ]);
           }else{
               unlink('assets/images/product/'.$update->image);
               $image_name = rand().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/assets/images/product/',$image_name);
               $update->update([
                   'image' => $image_name,
                   'code' => $request->code,
                   'name' => $request->name,
                   'category' => $request->category,
                   'status' => $request->status,
               ]);
           }
           Session::flash('success','Product Updated Successfully');
           return redirect()->route('product_index');
        }else{
            Session::flash('error','Product Already Exists');
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        $delete = Product::find($id);
        unlink('assets/images/product/'.$delete->image);
        $delete->delete();
        Session::flash('success','Product Deleted Successfully');
        return redirect()->route('product_index');
    }
}
