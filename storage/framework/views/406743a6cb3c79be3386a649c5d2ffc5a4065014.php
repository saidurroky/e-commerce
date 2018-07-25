<?php $__env->startSection('pageTitle'); ?>
Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pgSubTitle'); ?>
Edit Category
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
                    <h3 class="box-title">Edit Category Form</h3>
                </div>                
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" name="editCategoryForm" method="POST" action="<?php echo e(url('/category/update-category')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Category Name</label>

                                <div class="col-sm-9">
                                    <input type="text" name="category_name" value="<?php echo e($category->category_name); ?>" class="form-control" id="inputName3" placeholder="Add a Name">
                                    <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>" class="form-control" id="inputName3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription3" class="col-sm-3 control-label">Category Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor1" name="category_description" rows="10" cols="80" placeholder="Enter a Description (optional)"><?php echo e($category->category_description); ?></textarea>
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
                                <button type="submit" name="btn" class="btn btn-info">Update Category Info</button>
                                <button type="submit" class="btn btn-default">Reset</button>
                            </div>                        
                        </div>
                        <!-- /.box-footer -->
                    </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<script>
    document.forms['editCategoryForm'].elements['publication_status'].value='<?php echo e($category->publication_status); ?>';
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>