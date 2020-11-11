@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center text-info">All Purchase Account's<hr/></h2><br/>
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Option </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($purchase_account_s as $purchase_account)
                                        <tr>
                                            <td>{{ ($purchase_account_s->currentpage()-1) * $purchase_account_s ->perpage() + $loop->index + 1 }}</td>
                                            <td><img src="{{asset('assets/images/purchase/'.$purchase_account->image)}}"/></td>
                                            <td>{{$purchase_account->name}}</td>
                                            <td>{{$purchase_account->email}}</td>
                                            <td>{{$purchase_account->phone}}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location='{{route('user.edit',$purchase_account->id)}}'"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('purchase_account.edit',$purchase_account->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$purchase_account->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete Purchase Account</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    Are You Want To Delete These Purchase Account.<br/>
                                                                    Once You Delete These Purchase Account.<br/>
                                                                    You Will Delete His/Her Information Permanently
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['purchase_account.destroy',$purchase_account->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$purchase_account->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-danger">{{'No Purchase Account Created Yet'}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {!! $purchase_account_s->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
