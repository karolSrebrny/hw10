<?php $__env->startSection('content'); ?>
    <a href="/post/create" type="button" class="btn btn-primary">Add post</a>

    <?php if(isset($_SESSION['message'])): ?>

        <div class="alert alert-<?php echo e($_SESSION['message']['status']); ?>" role="alert">
            <?php echo e($_SESSION['message']['text']); ?>

        </div>

        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

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
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($post->id); ?></th>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->slug); ?></td>
                <td><?php echo e($post->created_at); ?></td>
                <td><?php echo e($post->updated_at); ?></td>
                <td>
                    <a href="/post/<?php echo e($post->id); ?>/edit" type="button" class="btn btn-primary">Edit</a>
                    <a href="/post/<?php echo e($post->id); ?>/destroy" type="button" class="btn btn-primary">Delete</a>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="6">No posts</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw10_1.test/resources/views/post/post-table.blade.php ENDPATH**/ ?>