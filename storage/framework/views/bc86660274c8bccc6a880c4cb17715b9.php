<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
    <div class="top-right links">
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/home')); ?>">Home</a>
        <?php endif; ?>
    </div>
<?php endif; ?>
    <div class="content">
        <img src="/sample.png" alt="pizza house logo">
        <div class="title m-b-md">
            Bersabe & Nobleza's Pizza House
        </div>
        <p class="mssg"><?php echo e(session('mssg')); ?></p>
        <a href="<?php echo e(route('pizzas.create')); ?>">Order a Pizza</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\pizzasystem\resources\views/welcome.blade.php ENDPATH**/ ?>