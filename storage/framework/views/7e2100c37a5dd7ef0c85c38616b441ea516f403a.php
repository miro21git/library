<?php $__env->startSection('content'); ?>

    <author-list></author-list>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
        window.app.$store.commit('authorList/set', ['authors', JSON.parse('<?php echo $authors ?? '{}'; ?>')], {root:true});
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\library\resources\views/authors/list.blade.php ENDPATH**/ ?>