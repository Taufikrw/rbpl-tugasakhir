<?php $__env->startSection('content'); ?>
    <div class="w-full">
        <h1 class="text-xl max-w-sm mx-auto text-center font-semibold mt-10 md:text-3xl md:max-w-md mb-5 md:mt-0">
            Selamat Datang di
            Dashboard Admin!, <span>Nama User</span></h1>
        <div class="grid grid-cols-2 max-w-3xl gap-5 mx-auto">
            <?php $__currentLoopData = $grant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/admin/<?php echo e($content['slug']); ?>"
                    class="flex justify-between border p-5 rounded-lg shadow-md hover:bg-indigo-600 basis-1/2 hover:text-white">
                    <span><?php echo e($content['Name']); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 ml-3"><?php echo $content['Icon']; ?></svg>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugasAkhirRBPL\rbpl-tugasakhir\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>