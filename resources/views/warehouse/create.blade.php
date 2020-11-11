@extends('master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'warehouse.store','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"> <i class="mdi mdi-store menu-icon"></i></span> Add New Warehouse</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">warehouse Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Outlet Name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">warehouse Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Outlet Hotline Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">warehouse Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Outlet Address" required>
                    </div>
                    <div class="form-group">
                        <label for="status">warehouse Status</label>
                        <select class="form-control" name="status" required>
                            <option selected="" disabled="" value="">choose an option</option>
                            <option value="active">{{'Active'}}</option>
                            <option value="de-active">{{'De-Active'}}</option>
                        </select>
                    </div>
                </div>
            </div><br/><br/>
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block">  <i class="mdi mdi-store menu-icon"></i> Create Warehouse </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
