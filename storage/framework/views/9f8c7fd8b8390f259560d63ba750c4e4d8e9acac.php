<?php $__env->startSection('pageTitle'); ?>
    Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pgSubTitle'); ?>
    Manage Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Order Information Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <?php if($message = Session::get('message')): ?>
                        <h3 class="text-center text-success"><?php echo e($message); ?></h3>
                    <?php endif; ?>
                    <div class="box-body">
                        <h2>Customer Info For This Order</h2>
                        <hr/>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Customer Name</th>
                                <td><?php echo e($customer->first_name.' '.$customer->last_name); ?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo e($customer->email); ?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo e($customer->phone_number); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($customer->address); ?></td>
                            </tr>
                        </table>
                        <h2>Shipping Info For This Order</h2>
                        <hr/>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Shipping Name</th>
                                <td><?php echo e($shipping->full_name); ?></td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td><?php echo e($shipping->email); ?></td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td><?php echo e($shipping->phone_number); ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?php echo e($shipping->address); ?></td>
                            </tr>
                        </table>
                        <h2>Product Info For This Order</h2>
                        <hr/>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            <?php ($i=1); ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($product->product_id); ?></td>
                                <td><?php echo e($product->product_name); ?></td>
                                <td>TK. <?php echo e($product->product_price); ?></td>
                                <td><?php echo e($product->product_quantity); ?></td>
                                <td>TK. <?php echo e($product->product_price * $product->product_quantity); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>