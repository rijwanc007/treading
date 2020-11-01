@extends('master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'product.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-package"></i></span> Add New Product</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="code">Product Code</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter Product Code" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Product Category</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Enter Product Category" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Product Status</label>
                        <select class="form-control" name="status">
                            <option value="active">{{'Active'}}</option>
                            <option value="de-active">{{'De-Active'}}</option>
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
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-package"></i> Create Product </button>
        </div>
    </div>
    {!! Form::close() !!}
    @endsection
