<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <title>GradeMaster | <?php echo e($title); ?></title>
</head>

<body>
    <div class="flex">
        <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex flex-col grow">
            <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="h-full flex justify-center items-center">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/assets/js/scripts.js"></script>
</body>

</html>
<?php /**PATH D:\tugasAkhirRBPL\rbpl-tugasakhir\resources\views/layouts/main.blade.php ENDPATH**/ ?>