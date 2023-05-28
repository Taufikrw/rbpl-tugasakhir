

<?php $__env->startSection('table'); ?>
    <thead>
        <tr>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Nama</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">NIP</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Jenis Kelamin</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tempat Lahir</th>
            <th class="py-2 px-4 border font-semibold uppercase sticky top-0 bg-slate-500 text-white">Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="hover:bg-indigo-500 hover:text-white duration-200 ease-in">
                <td class="py-2 px-4 border-b"><?php echo e($person->guruFirstName); ?> <?php echo e($person->guruLastName); ?></td>
                <td class="py-2 px-4 border-b"><?php echo e($person->nip); ?></td>
                <td class="py-2 px-4 border-b"><?php echo e($person->guruGender); ?></td>
                <td class="py-2 px-4 border-b"><?php echo e($person->guruTempatLahir); ?></td>
                <td class="py-2 px-4 border-b"><?php echo e($person->guruTanggalLahir); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugasAkhirRBPL\rbpl-tugasakhir\resources\views/admin/guru/table.blade.php ENDPATH**/ ?>