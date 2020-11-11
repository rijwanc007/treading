<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PurchaseAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PurchaseAccountController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $purchase_account_s = PurchaseAccount::orderBy('id','DESC')->paginate(20);
        return view('purchase_account.index',compact('purchase_account_s'));
    }
    public function create()
    {
        return view('purchase_account.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           'email' => 'unique:purchase_accounts'
        ]);
        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/images/purchase/',$image_name);
        PurchaseAccount::create([
           'image' => $image_name,
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'due' => 0,
           'paid' => 0,
           'balance' => 0,
        ]);
        Session::flash('success','Purchase Account Created Successfully');
        return redirect()->route('purchase_account_index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = PurchaseAccount::find($id);
        return view('purchase_account.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'unique:purchase_accounts,email,'.$id,
        ]);
        $update = PurchaseAccount::find($id);
        if (!empty($request->file('image'))) {
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/assets/images/purchase/',$image_name);
            unlink('assets/images/purchase/'.$update->image);
            $update->update([
                'image' => $image_name,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'due' => $request->due,
                'paid' => $request->paid,
                'balance' => $request->balance,
            ]);
            Session::flash('success','Purchase Account Updated Successfully');
            return redirect()->route('purchase_account_index');
        }else{
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'due' => $request->due,
                'paid' => $request->paid,
                'balance' => $request->balance,
            ]);
            Session::flash('success','Purchase Account Updated Successfully');
            return redirect()->route('purchase_account_index');
        }
    }
    public function destroy($id)
    {
        $delete = PurchaseAccount::find($id);
        unlink('assets/images/purchase/'.$delete->image);
        $delete->delete();
        Session::flash('success','Purchase Account Deleted Successfully');
        return redirect()->route('purchase_account_index');
    }
}
