<?php

namespace App\Http\Controllers\Admin;

use App\DealerAccount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DealerAccountController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $dealer_account_s = DealerAccount::orderBy('id','DESC')->paginate(20);
        return view('dealer_account.index',compact('dealer_account_s'));
    }
    public function create()
    {
        return view('dealer_account.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'unique:dealer_accounts'
        ]);
        $image = $request->file('image');
        $image_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/assets/images/dealer/',$image_name);
        DealerAccount::create([
            'image' => $image_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'due' => 0,
            'paid' => 0,
            'balance' => 0,
        ]);
        Session::flash('success','Dealer Account Created Successfully');
        return redirect()->route('dealer_account_index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = DealerAccount::find($id);
        return view('dealer_account.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
       $request->validate([
           'email' => 'unique:dealer_accounts,email,'.$id,
       ]);
        $update = DealerAccount::find($id);
        if (!empty($request->file('image'))) {
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/images/dealer/', $image_name);
            unlink('assets/images/dealer/'.$update->image);
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
           Session::flash('success','Dealer Account Updated Successfully');
           return redirect()->route('dealer_account_index');
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
           Session::flash('success','Dealer Account Updated Successfully');
           return redirect()->route('dealer_account_index');
        }
    }
    public function destroy($id)
    {
        $delete = DealerAccount::find($id);
        unlink('assets/images/dealer/'.$delete->image);
        $delete->delete();
        Session::flash('success','Dealer Account Deleted Successfully');
        return redirect()->route('dealer_account_index');
    }
}
