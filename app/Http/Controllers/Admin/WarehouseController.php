<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::orderBy('id','DESC')->paginate(20);
        return view('warehouse.index',compact('warehouses'));
    }
    public function create()
    {
        return view('warehouse.create');
    }
    public function store(Request $request)
    {
        Warehouse::create([
           'name' => $request->name,
           'phone' => $request->phone,
           'address' => $request->address,
           'status' => $request->status
        ]);
        Session::flash('success','warehouse create successfully');
        return redirect()->route('warehouse_index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
       $edit = Warehouse::find($id);
       return view('warehouse.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update = Warehouse::find($id);
        $update->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status
        ]);
        Session::flash('success','warehouse updated successfully');
        return redirect()->route('warehouse_index');
    }
    public function destroy($id)
    {
       $delete = Warehouse::find($id);
       $delete->delete();
       Session::flash('success','warehouse deleted successfully');
       return redirect()->route('warehouse_index');
    }
}
