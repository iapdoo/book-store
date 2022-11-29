<div class="portfolio-section">
    <div class="container">
        <div class="row">

            <!-- START PORTFOLIO HEADING -->
            <div class="col-12">
                <div class="portfolioHeading text-center">
                    <h1 class="high-lighted-heading">Our Popular Product</h1>
                    <p>Aenean imperdiet. Etiam ultricies nisi vel augue men tuhi spectrum alle me.</p>
                </div>
            </div>
            <!-- END PORTFOLIO HEADING -->

            <!-- START PORTFOLIO IMAGES -->
            <div class="price-option text-center">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productDesc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="price-box">
                                    <div class="option-price" style="height: 400px">

                                        <div id="demo" class="carousel slide" data-ride="carousel">


                                            <!-- The slideshow -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="<?php echo e(asset('storage/'.$productDesc->product_image)); ?>" alt="Los Angeles" width="200" height="200">
                                                </div>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>
                                    </div>

                                    <h2 class="product-name" style="margin: auto;">
                                        <a class="uppercase " href="show_product_details/<?php echo e($productDesc->id); ?>"><?php echo e($productDesc->product_name); ?> </a>
                                    </h2>
                                    <h1>$<?php echo e($productDesc->product_price); ?></h1>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>

                </div>
            </div>
            <!-- END PORTFOLIO IMAGES -->
        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="align-content-center text-center">
                    <?php echo e($product->render()); ?>

                </div>
            </div>
        </div>

    </div>
</div>


<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/our-product.blade.php ENDPATH**/ ?>