<?php $__env->startSection('content'); ?>
        <div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div>
                    <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                       <?php echo e($pizza->name); ?> - <?php echo e($pizza->type); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\pizzasystem\resources\views/pizzas.blade.php ENDPATH**/ ?>