<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets/images/user/15640848.png')}}" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                    <span class="text-secondary text-small">{{'Admin'}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="user-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dealer_account-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Dealer Account</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-bag-personal menu-icon"></i>
            </a>
            <div class="collapse" id="dealer_account-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('dealer_account_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('dealer_account_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#purchase_account-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Purchase Account</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-bag-personal menu-icon"></i>
            </a>
            <div class="collapse" id="purchase_account-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('purchase_account_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('purchase_account_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-package menu-icon"></i>
            </a>
            <div class="collapse" id="product-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('product_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('product_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#purchase-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Purchase</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-package-down menu-icon"></i>
            </a>
            <div class="collapse" id="purchase-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('purchase_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('purchase_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#outlet-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Outlet</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-store menu-icon"></i>
            </a>
            <div class="collapse" id="outlet-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('outlet_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('outlet_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#warehouse-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Warehouse</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-store menu-icon"></i>
            </a>
            <div class="collapse" id="warehouse-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('warehouse_create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('warehouse_index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sale-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Sale</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-sale menu-icon"></i>
            </a>
            <div class="collapse" id="sale-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sale_return-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Sale Return</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-keyboard-return menu-icon"></i>
            </a>
            <div class="collapse" id="sale_return-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#purchase_return-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Purchase Return</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-keyboard-return menu-icon"></i>
            </a>
            <div class="collapse" id="purchase_return-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#adjustment-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Adjustment</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-adjust menu-icon"></i>
            </a>
            <div class="collapse" id="adjustment-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#challan-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Challan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-receipt menu-icon"></i>
            </a>
            <div class="collapse" id="challan-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#invoice-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Invoice</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-billiards-rack menu-icon"></i>
            </a>
            <div class="collapse" id="invoice-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#collection-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Collection</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-paypal menu-icon"></i>
            </a>
            <div class="collapse" id="collection-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#expenses-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Expenses</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-export menu-icon"></i>
            </a>
            <div class="collapse" id="expenses-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#report-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Report</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-read menu-icon"></i>
            </a>
            <div class="collapse" id="report-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Role</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-movie-roll menu-icon"></i>
            </a>
            <div class="collapse" id="user-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
