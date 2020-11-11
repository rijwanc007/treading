@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header" id="bannerClose">
                    <h3 class="page-title"><span class="page-title-icon bg-gradient-primary text-white mr-2"> <i class="mdi mdi-package-down menu-icon"></i></span> Add New Purchase</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="status">Purchase Status</label>
                            <select class="form-control" name="status" id="purchase_status" required>
                                <option selected="" disabled="" value="">choose an option</option>
                                <option value="instant">{{'Instant'}}</option>
                                <option value="purchase-account">{{'Purchase Account'}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Warehouse</label>
                            <select class="form-control" name="status" required>
                                <option selected="" disabled="" value="">choose an option</option>
                                @foreach($warehouses as $warehouse)
                                <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="purchase_account_view">
                            <label for="status">Purchase Account</label>
                            <select class="form-control" id="purchase_account" name="purchase_account" required>
                                <option selected="" disabled="" value="">choose an option</option>
                                @foreach($purchase_account_s as $purchase_account)
                                    <option value="{{$purchase_account->id}}">{{$purchase_account->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone">Phone :</label>
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="how_many_item">How Many Item  :</label>
                                    <input type="number" class="form-control" id="how_many_item">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="add_item">Add Item :</label>
                                    <button type="button" class="btn btn-gradient-primary btn-lg btn-block" id="add_item"><i class="mdi mdi-plus menu-icon"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date :</label>
                                    <input type="date" class="form-control" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div id="append_item"></div>
                    </div>
                </div>
                <br/>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ban">Van :</label>
                                    <input type="number" class="form-control calculation" id="ban" name="ban" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="packing">Packing :</label>
                                    <input type="number" class="form-control calculation" id="packing" name="packing" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="belt">Belt :</label>
                                    <input type="number" class="form-control calculation" id="belt" name="belt" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="labour">Labour :</label>
                                    <input type="number" class="form-control calculation" id="labour" name="labour" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="transport">Transport :</label>
                                    <input type="number" class="form-control calculation" id="transport" name="transport" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amount">Amount :</label>
                                    <input type="number" class="form-control calculation" id="amount" name="amount"  value=0 readonly required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="commission">Commission :</label>
                                    <input type="number" class="form-control calculation" id="commission" name="commission" value=0>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="after_commission_amount">After Commission Amount :</label>
                                    <input type="number" class="form-control" id="after_commission_amount" name="after_commission_amount" value=0 readonly required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="due">Due :</label>
                                    <input type="number" class="form-control" id="due" name="due" value=0 readonly required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_amount">Total Amount :</label>
                                    <input type="number" class="form-control" id="total_amount" name="total_amount" value=0 readonly required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <button type="submit" class="btn btn-gradient-primary btn-lg btn-block"><i class="mdi mdi-package-down menu-icon"></i> Create  </button>
            </div>
        </div>
    </div>
    <script>
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change','#purchase_status',function(){
            let purchase_status = $(this).val();
            if(purchase_status == 'instant'){
                _('purchase_account_view').style.display = 'none';
                _('name').value = '';
                _('email').value = '';
                _('phone').value = '';
                _('address').value = '';
                _('due').value = 0;
                _('name').readOnly = false;
                _('email').readOnly = false;
                _('phone').readOnly = false;
                _('address').readOnly =false;
            }else{
                _('purchase_account_view').style.display = 'block';
                _('name').readOnly = true;
                _('email').readOnly = true;
                _('phone').readOnly = true;
                _('address').readOnly = true;

            }
        });
        $(document).on('change','#purchase_account',function(){
            let purchase_account = $(this).val();
            $.ajax({
               url : '/purchase_account_information/' + purchase_account,
               method : 'GET',
               success:function (data){
                  _('name').value = data.name;
                  _('email').value = data.email;
                  _('phone').value = data.phone;
                  _('address').value = data.address;
                  _('due').value = data.balance;
               }
            });
        });
        $(document).on('input','#how_many_item',function(){
            $('#append_item').empty();
            let how_many_item = $(this).val();
            let i;
            let html = '';
            for(i = 0 ; i < how_many_item ; i++){
            html += '<div class="row"> <div class="col-md-2"> <div class="form-group"> <label for="name">Code :</label> <input type="number" class="form-control code" id="code_'+ i +'" name="code[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="name">Name :</label> <input type="text" class="form-control name" id="name_'+ i +'" name="name[]" readonly required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="category">Category :</label> <input type="number" class="form-control category" id="category_'+ i +'" name="category[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="price">Price :</label> <input type="number" class="form-control price" id="price_'+ i +'" name="price[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="quantity">Quantity :</label> <input type="number" class="form-control" id="quantity_'+ i +'" name="quantity[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="minus_item">&nbsp;</label> <button type="button" class="form-control btn btn-danger text-center minus_item" style="border: none !important;"><i class="mdi mdi-minus menu-icon"></i></button> </div></div><div class="col-md-2 text-success product_code" id="product_code_display_'+ i +'">Code : <span id="product_code_show_'+ i +'"></span></div><div class="col-md-2 text-success product_name" id="product_name_display_'+ i +'">Name : <span id="product_name_show_'+ i +'"></span></div><div class="col-md-2 text-success product_category" id="product_category_display_'+ i +'">Category : <span id="product_category_show_'+ i +'"></span></div><div class="col-md-2 text-success product_price" id="product_price_display_'+ i +'">Price : <span id="product_price_show_'+ i +'"></span></div><div class="col-md-2 text-success product_quantity" id="product_quantity_display_'+ i +'">Quantity : <span id="product_quantity_show_'+ i +'"></span></div><div class="col-md-2 text-success product_total_price" id="product_total_price_display_'+ i +'">Total Price : <span id="product_total_price_show_'+ i +'"></span></div></div>';
            }
            $('#append_item').append(html);
        })
        $(document).on('click','#add_item',function(){
            let html = '';
            let i = 50000000;
            html += '<div class="row"> <div class="col-md-2"> <div class="form-group"> <label for="name">Code :</label> <input type="number" class="form-control code" id="code_'+ i +'" name="code[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="name">Name :</label> <input type="text" class="form-control name" id="name_'+ i +'" name="name[]" readonly required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="category">Category :</label> <input type="number" class="form-control category" id="category_'+ i +'" name="category[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="price">Price :</label> <input type="number" class="form-control price" id="price_'+ i +'" name="price[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="quantity">Quantity :</label> <input type="number" class="form-control" id="quantity_'+ i +'" name="quantity[]" required> </div></div><div class="col-md-2"> <div class="form-group"> <label for="minus_item">&nbsp;</label> <button type="button" class="form-control btn btn-danger text-center minus_item" style="border: none !important;"><i class="mdi mdi-minus menu-icon"></i></button> </div></div><div class="col-md-2 text-success product_code" id="product_code_display_'+ i +'">Code : <span id="product_code_show_'+ i +'"></span></div><div class="col-md-2 text-success product_name" id="product_name_display_'+ i +'">Name : <span id="product_name_show_'+ i +'"></span></div><div class="col-md-2 text-success product_category" id="product_category_display_'+ i +'">Category : <span id="product_category_show_'+ i +'"></span></div><div class="col-md-2 text-success product_price" id="product_price_display_'+ i +'">Price : <span id="product_price_show_'+ i +'"></span></div><div class="col-md-2 text-success product_quantity" id="product_quantity_display_'+ i +'">Quantity : <span id="product_quantity_show_'+ i +'"></span></div><div class="col-md-2 text-success product_total_price" id="product_total_price_display_'+ i +'">Total Price : <span id="product_total_price_show_'+ i +'"></span></div></div>';
            $('#append_item').append(html);
        })
        $(document).on('input','.code',function(){
            let string = $(this).attr('id');
            let split = string.split('_');
            let id = split[1];
        });
        $(document).on('click','.minus_item',function(){
           $(this).parent().parent().parent().remove();
        });
        $(document).on('input','.calculation',function(){
           let total_amount  = + _('ban').value + + _('packing').value + + _('belt').value + + _('labour').value + + _('transport').value + + _('amount').value + + _('after_commission_amount').value + + _('due').value;
           _('total_amount').value = total_amount;
        });
    </script>
@endsection
