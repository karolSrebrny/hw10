<?php $__env->startSection('content'); ?>
    <form action="/category/<?php echo e($category->id); ?>/edit" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($category->title); ?>">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($category->slug); ?>">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary mb-3" value="Save" />
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw9_2.test/resources/views/category/form-edit.blade.php ENDPATH**/ ?>