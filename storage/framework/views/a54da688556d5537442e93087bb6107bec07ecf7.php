<?php $__env->startSection('pageTitle'); ?>
Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pgSubTitle'); ?>
Add Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Category</h3>
                </div>
                <?php if($message = Session::get('message')): ?>
                <h3 class="text-center text-success"><?php echo e($message); ?></h3>
                    <?php endif; ?>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="<?php echo e(url('/category/new-category')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Category Name</label>

                                <div class="col-sm-9">
                                    <input type="text" name="category_name" class="form-control" id="inputName3" placeholder="Add a Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription3" class="col-sm-3 control-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor1" name="category_description" rows="10" cols="80" placeholder="Enter a Description (optional)"></textarea>
                                </div>
                            </div>                        

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Publication Status</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status">
                                        <option>Select Publication Status</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Save Category Info</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>                        
                        </div>
                        <!-- /.box-footer -->
                    </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>