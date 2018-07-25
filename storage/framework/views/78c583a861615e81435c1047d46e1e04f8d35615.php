<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <br/>
            <h3 class="text-center text-success">My Shopping Cart</h3>
        </div>
        <div class="col-sm-12">
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL No</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>
                    <?php ($i=1); ?>
                    <?php ($sum=0); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $cartProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($cartProduct->id); ?></td>
                        <td><?php echo e($cartProduct->name); ?></td>
                        <td><img src="<?php echo e(asset($cartProduct->options->image)); ?>" alt="" height="50" width="50"/></td>
                        <td>TK. <?php echo e($cartProduct->price); ?></td>
                        <td>
                            <form action="<?php echo e(url('/update-cart-product')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <input type="number" value="<?php echo e($cartProduct->qty); ?>" name="qty" min="1">
                                <input type="hidden" value="<?php echo e($cartProduct->rowId); ?>" name="rowId">
                                <input type="submit" value="Update" name="btn">
                            </form>
                        </td>
                        <td>TK. <?php echo e($total = $cartProduct->price*$cartProduct->qty); ?></td>
                        <td>
                            <a href="<?php echo e(url('/delete-cart-product/'.$cartProduct->rowId)); ?>" class="btn btn-danger btn-xs" title="Delete Cart Product">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                     <?php ($sum = $sum + $total); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h1>No product avaliable</h1>
                    <?php endif; ?>
                </table>
                <table class="table table-bordered">
                    <tr>
                        <th>Sub Totla</th>
                        <td>TK. <?php echo e($sum); ?> </td>
                    </tr>
                    <tr>
                        <th>Discount</th>
                        <td>TK. <?php echo e($discount = 0); ?></td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>TK. <?php echo e($tax = 0); ?></td>
                    </tr>
                    <tr>
                        <th>Grand Totla</th>
                        <td>TK. <?php echo e($grandTotal = ($sum - $discount) + $tax); ?></td>
                        <?php echo e(Session::put('grandTotal', $grandTotal)); ?>

                    </tr>
                </table>
                <table class="table table-borderd">
                    <tr>
                        <td>
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Continue Shopping</a>
                        </td>
                        <td>
                            <?php if(Session::get('customerId')): ?>
                            <a href="<?php echo e(url('/shipping-info')); ?>" class="btn btn-primary">Checkout</a>
                            <?php else: ?>
                            <a href="<?php echo e(url('/checkout')); ?>" class="btn btn-primary">Checkout</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>