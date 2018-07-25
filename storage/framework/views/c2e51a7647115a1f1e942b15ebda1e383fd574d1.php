<?php $__env->startSection('content'); ?>
<div class="men">
    <div class="container">
        <div class="single_top">
            <div class="col-md-9 single_right">
                <div class="grid images_3_of_2">
                    <ul id="etalage">
                        <?php $__currentLoopData = $subImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="optionallink.html">
                                <img class="etalage_thumb_image" src="<?php echo e(asset($subImage->sub_image)); ?>" class="img-responsive" />
                                <img class="etalage_source_image" src="<?php echo e(asset($subImage->sub_image)); ?>" class="img-responsive" title="" />
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="clearfix"></div>		
                </div> 
                <div class="desc1 span_3_of_2">
                    <h1><?php echo e($product->product_name); ?></h1>
                    <p class="m_2">Product Price: TK. <?php echo e($product->product_price); ?></p>
                    <p class="m_2">Product Category:  <?php echo e($product->category_name); ?></p>
                    <p class="m_2">Product Brand:  <?php echo e($product->brand_name); ?></p>
                    <p class="m_2">Product Stock:
                        <?php if($product->product_quantity > 0): ?>
                            <?php echo e('Avaliable'); ?>

                        <?php else: ?>
                            <?php echo e('Not Avaliable'); ?>

                        <?php endif; ?>
                    </p>
                    <div class="btn_form">
                        <form action="<?php echo e(url('/add-to-cart')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="number" name="qty" value="1" min="1"/>
                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>"/>
                            <input type="submit" value="Add To Cart" title=""/>
                        </form>
                    </div>
                    <span class="m_link"><a href="#">login to save in wishlist</a> </span>
                    <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
                </div>
                <div class="clearfix"></div>	
            </div>
            <div class="col-md-3">
                <!-- FlexSlider -->
                <section class="slider_flex">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><img src="<?php echo e(asset($latestProduct->product_image)); ?>" class="img-responsive" alt=""/></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </section>
                <!-- FlexSlider -->
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="toogle">
            <h2>Product Short Description</h2>
            <p class="m_text2">
                <?php echo e($product->short_description); ?>

            </p>
        </div>
        <div class="toogle">
            <h2>Product Lonbg Description</h2>
            <p class="m_text2"><?php echo e($product->long_description); ?></p>
        </div>
        <h4 class="head_single">Related Products</h4>
        <div class="span_3">
            <?php $__currentLoopData = $categoryProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3 grid_1">
                <a href="single.html">
                    <img src="<?php echo e(asset($categoryProduct->product_image)); ?>" class="img-responsive" alt=""/>
                    <h3><?php echo e($categoryProduct->product_name); ?></h3>
                    <p>Duis autem vel eum iriure</p>
                    <h4>TK. <?php echo e($categoryProduct->product_price); ?></h4>
                </a>  
            </div> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<link href="<?php echo e(asset('/front')); ?>/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo e(asset('/front')); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(function () {
    SyntaxHighlighter.all();
});
$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>