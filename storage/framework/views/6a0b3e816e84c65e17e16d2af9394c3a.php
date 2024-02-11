<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <title>Laravel</title>
    </head>
<body>

<?php echo $__env->yieldContent('content'); ?>



<footer class="bg-gray-700 p-5 text-gray-50 font-semibold text-center px-20">
    Copy Right 2024 Pizza House</footer>
</body>
</html>

<?php /**PATH D:\laravel\pizzasystem\resources\views/layouts/layout.blade.php ENDPATH**/ ?>