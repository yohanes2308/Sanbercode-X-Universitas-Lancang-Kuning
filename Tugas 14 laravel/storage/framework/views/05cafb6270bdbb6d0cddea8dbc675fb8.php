

<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Selamat Datang <?php echo e($nama); ?></h1>
    <p>Terimakasih telah bergabung di sanberbook.social media kita bersama!</p>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VSCODE\LATIHAN1\Sanbercode-X-Universitas-Lancang-Kuning\LARAVELINTRO\resources\views/pages/home.blade.php ENDPATH**/ ?>