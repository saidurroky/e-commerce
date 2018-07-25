<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('/admin')); ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo e(url('/home')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('/category/add-category')); ?>"><i class="fa fa-circle-o"></i> Add Category</a></li>
                    <li><a href="<?php echo e(url('/category/manage-category')); ?>"><i class="fa fa-circle-o"></i> Manage Category</a></li>             
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Brand</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('/brand/add-brand')); ?>"><i class="fa fa-circle-o"></i> Add Brand</a></li>
                    <li><a href="<?php echo e(url('/brand/manage-brand')); ?>"><i class="fa fa-circle-o"></i> Manage Brand</a></li>             
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(url('/product/add-product')); ?>"><i class="fa fa-circle-o"></i> Add Product</a></li>
                    <li><a href="<?php echo e(url('/product/manage-product')); ?>"><i class="fa fa-circle-o"></i> Manage Product</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(url('/manage-order')); ?>">
                    <i class="fa fa-files-o"></i>
                    <span>ORder</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

