@extends('master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['product.update',$edit->id],'method' => 'PATCH','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-package"></i></span> Update Product</h3></div>
            <div class="card">
                <div class="card-body">
                    <div><img class="product_image" src="{{asset('assets/images/product/'.$edit->image)}}" alt="product_image"/></div><br/>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="code">Product Code</label>
                        <input type="text" class="form-control" id="code" name="code" value="{{$edit->code}}" placeholder="Enter Product Code" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Product Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{$edit->category}}" placeholder="Enter Product Category" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Product Status</label>
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
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-package"></i> Update Product </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
