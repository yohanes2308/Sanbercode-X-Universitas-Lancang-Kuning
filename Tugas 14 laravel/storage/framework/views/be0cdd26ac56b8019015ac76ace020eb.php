

<?php $__env->startSection('title'); ?>
    Biodata
<?php $__env->stopSection(); ?>
   
<?php $__env->startSection('content'); ?>
<form action="/welcome"method="POST">
    <?php echo csrf_field(); ?>
        <label for=""> name :</label> <br>
        <input type="text" name= "nama1"> <br> <br>
        <label>Gender:</label><br><br>
    <input type="radio"name="Gender">Male <br>
    <input type="radio"name="Gender">female <br>
    <input type="radio"name="Gender">Other <br><br>
        <label for="">Nationaly</label>
        <select name="Nationality" >
    <option value="">Indonesia</option>
    <option value="">America</option>
    <option value="">Germany</option>
    <option value="">Italy</option>
    </select><br><br>
    <label>Language Spoken:</label><br>
    <input type="checkbox" name="Language Spoken">Bahasa Indonesia<br>
    <input type="checkbox" name="Language Spoken">English<br>
    <input type="checkbox" name="Language Spoken">Other<br>
        <label for="">bio :</label> <br>
       <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>
        <button type="submit">submit</button> <br>

    </form>
    <a href="/">kembali</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VSCODE\LATIHAN1\Sanbercode-X-Universitas-Lancang-Kuning\LARAVELINTRO\resources\views/pages/register.blade.php ENDPATH**/ ?>