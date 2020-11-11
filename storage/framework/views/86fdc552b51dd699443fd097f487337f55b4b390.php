<?php $__env->startSection('content'); ?>

    <book-detail></book-detail>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
        window.app.$store.commit('bookDetail/set', ['book', JSON.parse('<?php echo $book ?? '{}'; ?>')], {root:true});
        window.app.$store.commit('bookDetail/set', ['authors', JSON.parse('<?php echo $authors; ?>')], {root:true});
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\library\resources\views/books/book-detail.blade.php ENDPATH**/ ?>