@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center text-info">All Dealer's<hr/></h2><br/>
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
                                    @forelse($dealer_account_s as $dealer_account)
                                        <tr>
                                            <td>{{ ($dealer_account_s->currentpage()-1) * $dealer_account_s ->perpage() + $loop->index + 1 }}</td>
                                            <td><img src="{{asset('assets/images/dealer/'.$dealer_account->image)}}" alt="dealer_image"/></td>
                                            <td>{{$dealer_account->name}}</td>
                                            <td>{{$dealer_account->email}}</td>
                                            <td>{{$dealer_account->phone}}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location='{{route('user.edit',$dealer_account->id)}}'"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('dealer_account.edit',$dealer_account->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$dealer_account->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"><h4 class="modal-title">Delete Dealer Account</h4></div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    Are You Want To Delete These Dealer Account.<br/>
                                                                    Once You Delete These Dealer Account.<br/>
                                                                    You Will Delete His/Her Information Permanently
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['dealer_account.destroy',$dealer_account->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$dealer_account->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-danger">{{'No Dealer Account Created Yet'}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {!! $dealer_account_s->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
