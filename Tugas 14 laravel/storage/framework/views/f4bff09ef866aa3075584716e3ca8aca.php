<?php $__env->startSection('title'); ?>
Halaman Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<ul>
    <li>link 1</li>
    <li>link 2 <a href="/register">klik disini</a></li>
    <li>link 3</li>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VSCODE\LATIHAN1\Sanbercode-X-Universitas-Lancang-Kuning\LARAVELINTRO\resources\views/welcome.blade.php ENDPATH**/ ?>