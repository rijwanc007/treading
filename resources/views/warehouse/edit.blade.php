@extends('master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['warehouse.update',$edit->id],'method' => 'PATCH']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"> <i class="mdi mdi-store menu-icon"></i></span> Update Warehouse</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Warehouse Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}" placeholder="Enter warehouse Name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Warehouse Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{$edit->phone}}" placeholder="Enter warehouse Hotline Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Warehouse Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$edit->address}}" placeholder="Enter warehouse Address" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Warehouse Status</label>
                        <select class="form-control" name="status" required>
                            <option selected="" disabled="" value="">choose an option</option>
                            <option value="active" @if($edit->status == 'active') selected="selected" @endif>{{'Active'}}</option>
                            <option value="de-active" @if($edit->status == 'de-active') selected="selected" @endif>{{'De-Active'}}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"> <i class="mdi mdi-store menu-icon"></i> Update </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
