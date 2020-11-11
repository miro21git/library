<?php $__env->startSection('content'); ?>

    <book-list></book-list>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>

    <script>
        window.app.$store.commit('bookList/set', ['books', JSON.parse('<?php echo $books ?? '{}'; ?>')], {root:true});
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\library\resources\views/books/list.blade.php ENDPATH**/ ?>