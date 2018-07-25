<?php $__env->startSection('pageTitle'); ?>
    Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pgSubTitle'); ?>
    Add Product
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
                        <h3 class="box-title">Add New Product</h3>
                    </div>
                    <?php if($message = Session::get('message')): ?>
                        <h3 class="text-center text-success"><?php echo e($message); ?></h3>
                <?php endif; ?>
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="<?php echo e(url('/product/new-product')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Name</label>

                                <div class="col-sm-9">
                                    <input type="text" name="product_name" value="<?php if(isset($_POST['product_name'])){ echo $_POST['product_name']; }?>" class="form-control" id="inputName3">
                                    <?php echo e($errors->has('product_name') ? $errors->first('product_name') : ''); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option>Select Category Name</option>
                                        <?php $__currentLoopData = $publishedCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishedCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($publishedCategory->id); ?>"><?php echo e($publishedCategory->category_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="brand_id">
                                        <option>Select Brand Name</option>
                                        <?php $__currentLoopData = $publishedBrands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishedBrand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($publishedBrand->id); ?>"><?php echo e($publishedBrand->brand_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Price</label>

                                <div class="col-sm-9">
                                    <input type="number" name="product_price" class="form-control" id="inputName3" placeholder="Add a Number">
                                    <?php echo e($errors->has('product_price') ? $errors->first('product_price') : ''); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Quantity</label>

                                <div class="col-sm-9">
                                    <input type="number" name="product_quantity" class="form-control" id="inputName3" placeholder="Add a Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Short Description</label>

                                <div class="col-sm-9">
                                    <textarea name="short_description" rows="10" class="form-control" placeholder="Enter a Description (optional)"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputDescription3" class="col-sm-3 control-label">Product Long Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor1" name="long_description" rows="10" cols="80" placeholder="Enter a Description (optional)"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Main Image</label>

                                <div class="col-sm-9">
                                    <input type="file" name="product_image" accept="image/*"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Product Sub Image</label>

                                <div class="col-sm-9">
                                    <input type="file" name="sub_image[]" accept="image/*" multiple/>
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
                                <button type="submit" name="btn" class="btn btn-info">Save Product Info</button>
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