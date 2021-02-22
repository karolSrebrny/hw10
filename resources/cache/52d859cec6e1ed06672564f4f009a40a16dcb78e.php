<?php $__env->startSection('content'); ?>
    <form action="/tag/create" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($tag->title); ?>">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($tag->slug); ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary mb-3" value="Save" />
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw9_2.test/resources/views/tag/tag-form.blade.php ENDPATH**/ ?>