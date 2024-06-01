

<?php $__env->startSection('title'); ?>
    Add Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="/post" method="post">

    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form> 

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\laravel3\Tugas-13\resources\views/post/add.blade.php ENDPATH**/ ?>