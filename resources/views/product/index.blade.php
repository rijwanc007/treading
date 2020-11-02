@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center text-info">All Product's</h2><br/>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th> S/L </th>
                                    <th> Product Image </th>
                                    <th> Product Code </th>
                                    <th> Product Name </th>
                                    <th> Product Category </th>
                                    <th> Product Status </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <td>{{ ($products->currentpage()-1) * $products ->perpage() + $loop->index + 1 }}</td>
                                        <td><img src="{{asset('assets/images/product/'.$product->image)}}"  alt="product_image"/></td>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->status}}</td>
                                        <td>
                                            <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('product.edit',$product->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                            <div class="modal fade" id="delete_modal_{{$product->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Product</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete These Product.Once You Delete These Product</p>
                                                            <p>You Will Delete These Product Permanently</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['product.destroy',$product->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">submit</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$product->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-danger">{{'No Product Available'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
