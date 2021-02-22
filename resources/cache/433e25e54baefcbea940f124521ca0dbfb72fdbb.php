<?php $__env->startSection('content'); ?>
    <a href="/category/create" type="button" class="btn btn-primary">Add category</a>


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
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($category->id); ?></th>
                <td><?php echo e($category->title); ?></td>
                <td><?php echo e($category->slug); ?></td>
                <td><?php echo e($category->created_at); ?></td>
                <td><?php echo e($category->updated_at); ?></td>
                <td>
                    <a href="/category/<?php echo e($category->id); ?>/edit" type="button" class="btn btn-primary">Edit</a>
                    <a href="/category/<?php echo e($category->id); ?>/destroy" type="button" class="btn btn-primary">Delete</a>
                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="6">No categories</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw10_1.test/resources/views/category/table.blade.php ENDPATH**/ ?>