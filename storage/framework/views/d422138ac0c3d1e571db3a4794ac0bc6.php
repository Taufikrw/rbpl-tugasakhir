<?php $__env->startSection('content'); ?>
    <div class="container px-20 py-11 h-full">
        <div class="flex mb-5 justify-between relative">
            <a href="/admin/siswa/add" class="py-2 px-2 rounded-xl shadow-md bg-slate-500 text-white flex">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-plus-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                <span class="self-center mx-2 uppercase">Tambah <?php echo e($title); ?></span>
            </a>
            <h1 class="absolute right-1/2 translate-x-1/2 text-4xl font-bold top-0">Daftar <?php echo e($title); ?></h1>
            <a href="#">filter</a>
        </div>
        <div class="max-h-[70vh] overflow-y-auto border rounded-lg scrollbar-none">
            <table class="w-full table-auto border border-gray-300">
                <?php echo $__env->yieldContent('table'); ?>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugasAkhirRBPL\rbpl-tugasakhir\resources\views/admin/list.blade.php ENDPATH**/ ?>