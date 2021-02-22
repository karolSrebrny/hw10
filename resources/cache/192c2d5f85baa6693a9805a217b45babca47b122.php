<?php $__env->startSection('content'); ?>
    <form action="/post/<?php echo e($post->id); ?>/edit" method="post">
        <?php if(isset($_SESSION['message'])): ?>

            <div class="alert alert-<?php echo e($_SESSION['message']['status']); ?>" role="alert">
                <?php echo e($_SESSION['message']['text']); ?>

            </div>

            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e($post->slug); ?>">
        </div>
            <?php if(isset($_SESSION['errors']['slug'])): ?>
                <?php $__currentLoopData = $_SESSION['errors']['slug']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e($error); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary mb-3" value="Save" />
        </div>
    </form>
    <?php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/hw10_1.test/resources/views/post/post-form-edit.blade.php ENDPATH**/ ?>