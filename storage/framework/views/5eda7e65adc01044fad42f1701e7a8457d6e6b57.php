<?php $__env->startSection('content'); ?>

    <author-detail></author-detail>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

    window.app.$store.commit('authorDetail/set', ['msg', '<?php echo e($msg ?? ''); ?>'], {root:true});

    window.app.$store.commit('authorDetail/set', ['id', '<?php echo e($author->id ?? ''); ?>'], {root:true});
    window.app.$store.commit('authorDetail/set', ['name', '<?php echo e($author->name ?? ''); ?>'], {root:true});
    window.app.$store.commit('authorDetail/set', ['surname', '<?php echo e($author->surname ?? ''); ?>'], {root:true});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\library\resources\views/authors/author-detail.blade.php ENDPATH**/ ?>