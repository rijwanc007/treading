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
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> S/L </th>
                                        <th class="text-center"> Name </th>
                                        <th class="text-center"> Email </th>
                                        <th class="text-center"> Option </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($users->count() ==! 0)
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">{{ ($users->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}</td>
                                                <td class="text-center">{{$user->name}}</td>
                                                <td class="text-center">{{$user->email}}</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-inverse-info btn-icon" onclick="window.location='{{route('user.edit',$user->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                    <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Delete User</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are You Want To Delete These User.Once You Delete These User</p>
                                                                    <p>You Will Delete His/Her Information Permanently</p>
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
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center text-info">{{'No User Created Yet'}}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
