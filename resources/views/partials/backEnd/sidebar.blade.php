<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

        	<li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="{{ route ('admin-dashboard')}}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> </a>
             
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Users </span> <span class="menu-arrow"></span> </a>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0);">Active Users</a></li>
                    <li><a href="javascript:void(0);">Bannned Users</a></li>
                    <li><a href="javascript:void(0);">All Users</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Admins </span> <span class="menu-arrow"></span> </a>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0);">Active Admins</a></li>
                    <li><a href="javascript:void(0);">Bannned Admins</a></li>
                    <li><a href="javascript:void(0);">All Admins</a></li>
                </ul>
            </li>

            <li class="text-muted menu-title">Categories</li>
            <li class="has_sub">
                <a href="{{ route('category.index')}}" class="waves-effect"><i class="ti-files"></i><span> Manage Categories </span></a>
            </li>


            <li class="text-muted menu-title">Items</li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Manage Items </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('item.add')}}">Add New Item</a></li>
                    <li><a href="{{ route('item.index')}}">View Items</a></li>
                </ul>
            </li>

            <li class="text-muted menu-title">Coupons</li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Manage Coupons </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0);">Add New Coupon</a></li>
                    <li><a href="javascript:void(0);">View Coupons</a></li>
                </ul>
            </li>

            <li class="text-muted menu-title">Orders</li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Manage Orders </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="javascript:void(0);">View All Orders</a></li>
                </ul>
            </li>

            <li class="text-muted menu-title">Miscellaneous</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Reports </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Privacy Policy </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-gift"></i><span> Terms and Conditions </span></a>
                </li>
            </ul>

        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<!-- Left Sidebar End -->