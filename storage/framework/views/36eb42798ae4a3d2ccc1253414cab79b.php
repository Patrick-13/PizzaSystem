<?php $__env->startSection('content'); ?>
        <div class="wrapper pizza-index">
        <h1>Pizza Order</h1>
                    <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pizza-item">
                        <img src="/sample.png" alt="pizzaorder">
                       <h4><a href="/pizzas/<?php echo e($pizza->id); ?>"><?php echo e($pizza->name); ?></a></h4>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\pizzasystem\resources\views/pizzas/index.blade.php ENDPATH**/ ?>