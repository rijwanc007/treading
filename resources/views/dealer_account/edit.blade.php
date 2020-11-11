@extends('master')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['dealer_account.update',$edit->id],'method' => 'PATCH','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-account"></i></span> Update Dealer Account</h3></div>
            <div class="card">
                <div class="card-body">
                    <div><img class="product_image" src="{{asset('assets/images/dealer/'.$edit->image)}}" alt="dealer_image"/></div><br/>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$edit->email}}" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="{{$edit->phone}}" placeholder="Enter Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$edit->address}}" placeholder="Enter Full Address" required>
                    </div>
                    <div class="form-group">
                        <label for="due">Due</label>
                        <input type="number" class="form-control" id="due" name="due" value="{{$edit->due}}" placeholder="Enter Dealer Due Balance" required>
                    </div>
                    <div class="form-group">
                        <label for="paid">Paid</label>
                        <input type="number" class="form-control" id="paid" name="paid" value="{{$edit->paid}}" placeholder="Enter Dealer Paid Balance" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Balance</label>
                        <input type="number" class="form-control" id="balance" name="balance" value="{{$edit->balance}}" readonly required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-account"></i> Update  </button>
        </div>
    </div>
    {!! Form::close() !!}

    <script>
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('input','#due',function(){
            let due = $(this).val();
            let paid = _('paid').value;
            let balance = due - paid;
            _('balance').value = balance;
        });
        $(document).on('input','#paid',function(){
            let due = _('due').value;
            let paid = $(this).val();
            let balance = due - paid;
            _('balance').value = balance;
        });
    </script>
@endsection
