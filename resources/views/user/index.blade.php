@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center text-info">All User's<hr/></h2><br/>
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th> S/L </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Option </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{ ($users->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('user.edit',$user->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header"><h4 class="modal-title">Delete User</h4></div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    Are You Want To Delete These User.<br/>
                                                                    Once You Delete These User.<br/>
                                                                    You Will Delete User Information Permanently
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['user.destroy',$user->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$user->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-danger">{{'No User Created Yet'}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
