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
                            <label for="purchase_status">Purchase Status</label>
                            <select class="form-control" name="purchase_status" id="purchase_status" required>
                                <option selected="" disabled="" value="">choose an option</option>
                                <option value="instant">{{'Instant'}}</option>
                                <option value="purchase-account">{{'Purchase Account'}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="warehouse">Warehouse</label>
                            <select class="form-control" id="warehouse" name="warehouse" required>
                                <option selected="" disabled="" value="">choose an option</option>
                                @foreach($warehouses as $warehouse)
                                    <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="purchase_account_view">
                            <label for="purchase_account">Purchase Account</label>
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
                <div id="append_item_body">
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
                                    <input type="number" class="form-control" id="ban" name="ban">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="packing">Packing :</label>
                                    <input type="number" class="form-control" id="packing" name="packing">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="belt">Belt :</label>
                                    <input type="number" class="form-control" id="belt" name="belt">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="labour">Labour :</label>
                                    <input type="number" class="form-control" id="labour" name="labour">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="transport">Transport :</label>
                                    <input type="number" class="form-control" id="transport" name="transport">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="amount">Amount :</label>
                                    <input type="number" class="form-control" id="amount" name="amount" onkeydown="return false" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="commission">Commission :</label>
                                    <input type="number" class="form-control " id="commission" name="commission">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="after_commission_amount">After Commission Amount :</label>
                                    <input type="number" class="form-control" id="after_commission_amount" name="after_commission_amount" onkeydown="return false" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="due">Due :</label>
                                    <input type="number" class="form-control" id="due" name="due" onkeydown="return false" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="total_amount">Total Amount :</label>
                                    <input type="number" class="form-control" id="total_amount" name="total_amount" onkeydown="return false" required>
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
        let j = 500000000;
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change','#purchase_status',function(){
            let purchase_status = $(this).val();
            if(purchase_status === 'instant'){
                _('purchase_account_view').style.display = 'none';
                _('name').value = '';
                _('email').value = '';
                _('phone').value = '';
                _('address').value = '';
                _('due').value = '';
                _('name').readOnly = false;
                _('email').readOnly = false;
                _('phone').readOnly = false;
                _('address').readOnly =false;
                _('append_item_body').style.display = 'block';
                calculate();
            }else{
                _('purchase_account_view').style.display = 'block';
                _('name').readOnly = true;
                _('email').readOnly = true;
                _('phone').readOnly = true;
                _('address').readOnly = true;
                _('append_item_body').style.display = 'none';
                calculate();
            }
        });
        $(document).on('change','#purchase_account',function(){
            let purchase_account = $(this).val();
            $.ajax({
                url : '/purchase_account_information/' + purchase_account,
                method : 'GET',
                success:function (data){
                    _('append_item_body').style.display = 'block';
                    _('name').value = data.name;
                    _('email').value = data.email;
                    _('phone').value = data.phone;
                    _('address').value = data.address;
                    _('due').value = data.balance;
                    calculate();
                }
            });
        });
        $(document).on('input','#how_many_item',function(){
            let how_many_item = $(this).val();
            let i;
            let html = '';
            for(i = 0 ; i < how_many_item ; i++){
                html += '<div class="row"> <div class="col-md-3"> ' +
                    '<div class="form-group"> <label for="code_'+ i +'">Code :</label> <input type="number" class="form-control code" id="code_'+ i +'" name="code[]" required> </div></div>' +
                    '<div class="col-md-3"> <div class="form-group"> <label for="category_'+ i +'">Category :</label><select class="form-control category" id="category_'+ i +'" name="category[]" required><option selected="" disabled="" value="">choose an option</option></select></div></div>' +
                    '<div class="col-md-2"> <div class="form-group price"> <label for="price_'+ i +'">Price :</label> <input type="number" class="form-control p_price" id="price_'+ i +'" name="price[]" required> </div></div>' +
                    '<div class="col-md-2"> <div class="form-group"> <label for="quantity_'+ i +'">Quantity :</label> <input type="number" class="form-control quantity" id="quantity_'+ i +'" name="quantity[]" required> </div></div>' +
                    '<div class="col-md-2"> <div class="form-group"> <label for="minus_item">&nbsp;</label> <button type="button" class="form-control btn btn-danger text-center minus_item" style="border: none !important;"><i class="mdi mdi-minus menu-icon"></i></button> </div></div>' +
                    '<div class="col-md-2 text-success product_code" id="product_code_display_'+ i +'">Code : <span id="product_code_show_'+ i +'"></span></div>' +
                    '<div class="col-md-2 text-success product_name" id="product_name_display_'+ i +'">Name : <span id="product_name_show_'+ i +'"></span></div>' +
                    '<div class="col-md-2 text-success product_category" id="product_category_display_'+ i +'">Category : <span id="product_category_show_'+ i +'"></span></div>' +
                    '<div class="col-md-2 text-success product_price" id="product_price_display_'+ i +'">Price : <span id="product_price_show_'+ i +'"></span></div>' +
                    '<div class="col-md-2 text-success product_quantity" id="product_quantity_display_'+ i +'">Quantity : <span id="product_quantity_show_'+ i +'"></span></div>' +
                    '<div class="col-md-2 text-success product_total_price" id="product_total_price_display_'+ i +'">Total Price : <span class="product_total_price_show" id="product_total_price_show_'+ i +'"></span></div></div>';
            }
            $('#append_item').empty().append(html);
            calculate();
        })
        $(document).on('click','#add_item',function(){
            let html = '';
            j += 1;
            html += '<div class="row"> <div class="col-md-3"> <div class="form-group"> <label for="code_'+ j +'">Code :</label> <input type="number" class="form-control code" id="code_'+ j +'" name="code[]" required> </div></div>' +
                '<div class="col-md-3"> <div class="form-group"> <label for="category_'+ j +'">Category :</label><select class="form-control category" id="category_'+ j +'" name="category[]" required><option selected="" disabled="" value="">choose an option</option></select></div></div>' +
                '<div class="col-md-2"> <div class="form-group price"> <label for="price_'+ j +'">Price :</label> <input type="number" class="form-control p_price" id="price_'+ j +'" name="price[]" required> </div></div>' +
                '<div class="col-md-2"> <div class="form-group"> <label for="quantity_'+ j +'">Quantity :</label> <input type="number" class="form-control quantity" id="quantity_'+ j +'" name="quantity[]" required> </div></div>' +
                '<div class="col-md-2"> <div class="form-group"> <label for="minus_item">&nbsp;</label> <button type="button" class="form-control btn btn-danger text-center minus_item" style="border: none !important;"><i class="mdi mdi-minus menu-icon"></i></button> </div></div>' +
                '<div class="col-md-2 text-success product_code" id="product_code_display_'+ j +'">Code : <span id="product_code_show_'+ j +'"></span></div>' +
                '<div class="col-md-2 text-success product_name" id="product_name_display_'+ j +'">Name : <span id="product_name_show_'+ j +'"></span></div>' +
                '<div class="col-md-2 text-success product_category" id="product_category_display_'+ j +'">Category : <span id="product_category_show_'+ j +'"></span></div>' +
                '<div class="col-md-2 text-success product_price" id="product_price_display_'+ j +'">Price : <span id="product_price_show_'+ j +'"></span></div>' +
                '<div class="col-md-2 text-success product_quantity" id="product_quantity_display_'+ j +'">Quantity : <span id="product_quantity_show_'+ j +'"></span></div>' +
                '<div class="col-md-2 text-success product_total_price" id="product_total_price_display_'+ j +'">Total Price : <span class="product_total_price_show" id="product_total_price_show_'+ j +'"></span></div></div>';
            $('#append_item').append(html);
            calculate();
        })
        $(document).on('input','.code',function(){
            let code = $(this).val();
            let string = $(this).attr('id');
            let split = string.split('_');
            let id = split[1];
            $.ajax({
                url : '/product_information/' + code,
                method : 'GET',
                success : function(data){
                    if(data[0].length === 0){
                        toastr.error("Product Code Not Matched");
                        $('#category_' + id).empty().append('<option selected="" disabled="" value="">choose an option</option>');
                        _('price_' + id).value = '';
                        _('quantity_' + id).value = '';
                        _('product_code_display_' + id).style.display = 'none';
                        _('product_code_show_' + id).innerHTML = '';
                        _('product_name_display_' + id).style.display = 'none';
                        _('product_name_show_' + id).innerHTML = '';
                        _('product_category_display_' + id).style.display = 'none';
                        _('product_category_show_' + id).innerHTML = '';
                        _('product_price_display_' + id).style.display = 'none'
                        _('product_price_show_' + id).innerHTML =  '';
                        _('product_quantity_display_' + id).style.display = 'none';
                        _('product_quantity_show_' + id).innerHTML = '';
                        _('product_total_price_display_' + id).style.display = 'none';
                        _('product_total_price_show_' + id).innerHTML = '';
                        calculate();
                    }else{
                        toastr.success("Product Code Matched");
                        jQuery.each( data[1], function( item, value ) {
                            $('#category_' + id).append('<option value="'+ value.category +'">' + value.category + '</option>');
                        });
                        _('product_code_display_' + id).style.display = 'block';
                        _('product_code_show_' + id).innerHTML = data[0][0].code;
                        _('product_name_display_' + id).style.display = 'block';
                        _('product_name_show_' + id).innerHTML = data[0][0].name;
                        calculate();
                    }
                }
            })
        });
        $(document).on('change','.category',function(){
            let string = $(this).attr('id');
            let split = string.split('_');
            let id = split[1];
            _('product_category_display_' + id).style.display = 'block';
            _('product_category_show_' + id).innerHTML = $(this).val();
            calculate();
        })
        $(document).on('input','.p_price',function(){
            let value = $(this).val();
            let string = $(this).attr('id');
            let split = string.split('_');
            let id = split[1];
            if(_('code_' + id).value === ''){
                _('price_' + id).value = '';
                toastr.error("Product Code Not Set");
                calculate();
            }else{
                _('product_price_display_' + id).style.display = 'block'
                _('product_price_show_' + id).innerHTML =  $(this).val();
                let total_price = _('quantity_' + id).value * $(this).val();
                _('product_total_price_show_' + id).innerHTML = total_price;
                calculate();
            }
        });
        $(document).on('input','.quantity',function(){
            let string = $(this).attr('id');
            let split = string.split('_');
            let id = split[1];
            if(_('code_' + id).value === ''){
                _('quantity' + id).value = '';
                toastr.error("Product Code Not Set");
            }else if( _('price_' + id).value === ''){
                toastr.error("Product Price Not Set");
                _('quantity_' + id).value = '';
            }else{
                _('product_quantity_display_' + id).style.display = 'block';
                _('product_quantity_show_' + id).innerHTML = $(this).val();
                let total_price = _('price_' + id).value * $(this).val();
                _('product_total_price_display_' + id).style.display = 'block';
                _('product_total_price_show_' + id).innerHTML = total_price;
                calculate();
            }
        });
        $(document).on('click','.minus_item',function(){
            $(this).parent().parent().parent().remove();
            calculate();
        });
        $(document).on('input','#commission',function(){
            let commission = $(this).val();
            let amount = _('amount').value;
            let after_commission_amount = (amount * commission)/100;
            _('after_commission_amount').value = amount - after_commission_amount;
            calculate();
        });
        $(document).on('input','#ban , #packing , #labour , #transport',function(){
            calculate();
        })
        function calculate(){
            let sum = 0;
            $('.product_total_price_show').each(function(){
                sum += + $(this).text();
            });
            _('amount').value = sum;
            let total_amount  = + _('ban').value + + _('packing').value + + _('belt').value + + _('labour').value + + _('transport').value + + _('amount').value + + _('after_commission_amount').value + + _('due').value;
            _('total_amount').value = total_amount;
        }
    </script>
@endsection
