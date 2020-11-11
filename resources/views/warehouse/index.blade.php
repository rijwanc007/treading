@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <h2 class="text-center text-info">All Warehouse's<hr/></h2><br/>
                                <table class="table table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> warehouse Name </th>
                                        <th> warehouse Phone </th>
                                        <th> warehouse Address </th>
                                        <th> warehouse Status </th>
                                        <th> Option </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($warehouses as $warehouse)
                                        <tr>
                                            <td>{{ ($warehouses->currentpage()-1) * $warehouses ->perpage() + $loop->index + 1 }}</td>
                                            <td>{{$warehouse->name}}</td>
                                            <td>{{$warehouse->phone}}</td>
                                            <td>{{$warehouse->address}}</td>
                                            <td>{{$warehouse->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('warehouse.edit',$warehouse->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$warehouse->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"><h4 class="modal-title">Delete warehouse</h4></div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    Are You Want To Delete These warehouse.<br/>
                                                                    Once You Delete These warehouse.<br/>
                                                                    You Will Delete warehouse Information Permanently
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['warehouse.destroy',$warehouse->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$warehouse->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-danger">{{'No warehouse Created Yet'}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {!! $warehouses->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
