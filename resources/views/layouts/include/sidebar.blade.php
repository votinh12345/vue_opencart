<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span> Catalog</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{URL::to('/category/index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Products</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Recurring Profiles<</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Filters</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Options</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Manufacturers</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Downloads</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Reviews</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Information</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Design</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Layouts</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Theme Editor</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Language Editor</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Banners</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> SEO URL</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Sales</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Orders</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Recurring Profiles</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Returns</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Gift Vouchers</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Customers</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Customers</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Customer Groups</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Customer Approvals</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Custom Fields</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-table"></i> <span>Marketing</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Marketing</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Coupons</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Mail</a></li>
            </ul>
        </li>
        <li>
            <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>System</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Settings</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Localisation</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Mail</a></li>
            </ul>
        </li>
        <li>
            <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Reports</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Reports</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Who's Online</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Statistics</a></li>
            </ul>
        </li>
    </ul>
</section>
<!-- /.sidebar -->
