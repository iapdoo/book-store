<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(!empty($title)?$title:trans('admin.adminpanel')); ?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->

    <?php if(app()->getLocale() == "ar"): ?>
    

        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/adminlteAr.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/rtl.css">

    <?php else: ?>
        
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/adminlte.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- iCheck -->

    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper ">
<?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>