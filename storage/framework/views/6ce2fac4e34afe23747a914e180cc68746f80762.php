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
                    <h3 class="box-title">Category Information Data Table</h3>
                </div>
                <!-- /.box-header -->
                <?php if($message = Session::get('message')): ?>
                <h3 class="text-center text-success"><?php echo e($message); ?></h3>
                <?php endif; ?>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($category->id); ?></td>
                                <td><?php echo e($category->category_name); ?></td>
                                <td><?php echo e($category->category_description); ?></td>

                                <td>
                                    <?php if($category->publication_status == 1): ?>
                                    <span class="label label-success">Published</span>
                                    <?php else: ?>
                                    <span class="label label-warning">Unpublished</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($category->publication_status == 1): ?>
                                    <a href="<?php echo e(url('/category/unpublished-category/'.$category->id)); ?>" class="btn btn-success btn-xs" title="Published">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    <?php else: ?>
                                    <a href="<?php echo e(url('/category/published-category/'.$category->id)); ?>" class="btn btn-warning btn-xs" title="Unpublished">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    <?php endif; ?>
                                    <a href="<?php echo e(url('/category/edit-category/'.$category->id)); ?>" class="btn btn-info btn-xs" title="Edit blog">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>   
                                    <a href="<?php echo e(url('/category/delete-category/'.$category->id)); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to delete This ?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>                                            
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
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