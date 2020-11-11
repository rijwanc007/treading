@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <h2 class="text-center text-info">All Outlet's<hr/></h2><br/>
                                <table class="table table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Outlet Name </th>
                                        <th> Outlet Phone </th>
                                        <th> Outlet Address </th>
                                        <th> Outlet Status </th>
                                        <th> Option </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($outlets as $outlet)
                                        <tr>
                                            <td>{{ ($outlets->currentpage()-1) * $outlets ->perpage() + $loop->index + 1 }}</td>
                                            <td>{{$outlet->name}}</td>
                                            <td>{{$outlet->phone}}</td>
                                            <td>{{$outlet->address}}</td>
                                            <td>{{$outlet->status}}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('outlet.edit',$outlet->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$outlet->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"><h4 class="modal-title">Delete Outlet</h4></div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    Are You Want To Delete These Outlet.<br/>
                                                                    Once You Delete These Outlet.<br/>
                                                                    You Will Delete Outlet Information Permanently
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['outlet.destroy',$outlet->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$outlet->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-danger">{{'No Outlet Created Yet'}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {!! $outlets->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
