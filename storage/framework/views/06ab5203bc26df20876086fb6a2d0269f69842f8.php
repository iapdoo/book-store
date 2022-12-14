<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/font-awesome.min.css">

</head>
<body>
<!-- start nav bar-->
<nav class="navbar navbar-inverse navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Axit" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/home')); ?>"><?php echo e($about->first()->siteName); ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo e(url('/home')); ?>"><?php echo e(trans('admin.home')); ?></a></li>
                <li><a href="<?php echo e(url('about_us')); ?>"><?php echo e(trans('admin.about_us')); ?></a></li>
                <li><a href="<?php echo e(url('contact')); ?>"><?php echo e(trans('admin.Contact')); ?></a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <!-- Message Start -->
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <i class="fa fa-flag"></i>
                                            <?php echo e($properties['native']); ?>

                                        </h3>

                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->
<?php /**PATH C:\Users\Apdoo\Desktop\New folder\book-store\resources\views/website/header.blade.php ENDPATH**/ ?>