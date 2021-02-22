<?php $__env->startSection('content'); ?>
    <a href="/tag/create" type="button" class="btn btn-primary">Add tag</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($tag->id); ?></th>
                <td><?php echo e($tag->title); ?></td>
                <td><?php echo e($tag->slug); ?></td>
                <td><?php echo e($tag->created_at); ?></td>
                <td><?php echo e($tag->updated_at); ?></td>
                <td>
                    <a href="/tag/<?php echo e($tag->id); ?>/edit" type="button" class="btn btn-primary">Edit</a>
                    <a href="/tag/<?php echo e($tag->id); ?>/destroy" type="button" class="btn btn-primary">Delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="6">No categories</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw9_2.test/resources/views/tag/tag-table.blade.php ENDPATH**/ ?>