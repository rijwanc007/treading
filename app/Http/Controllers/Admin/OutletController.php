<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OutletController extends Controller
{
    public function index()
    {
        $outlets = Outlet::orderBy('id','DESC')->paginate(20);
        return view('outlet.index',compact('outlets'));
    }
    public function create()
    {
        return view('outlet.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'unique:outlets'
        ]);
        Outlet::create([
           'name' => $request->name,
           'phone' => $request->phone,
           'address' => $request->address,
           'status' => $request->status
        ]);
        Session::flash('success','Outlet Created Successfully');
        return redirect()->route('outlet_index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = Outlet::find($id);
        return view('outlet.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
       $update = Outlet::find($id);
       $update->update([
           'name' => $request->name,
           'phone' => $request->phone,
           'address' => $request->address,
           'status' => $request->status
       ]);
        Session::flash('success','Outlet Updated Successfully');
        return redirect()->route('outlet_index');
    }
    public function destroy($id)
    {
        $delete = Outlet::find($id);
        $delete->delete();
        Session::flash('success','Outlet Deleted Successfully');
        return redirect()->route('outlet_index');
    }
}
