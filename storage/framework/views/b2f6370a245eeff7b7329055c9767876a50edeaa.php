<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Library</title>

    <link href="/css/app.css" rel="stylesheet">

</head>
<body>


<div id="app">

    <navigation></navigation>

    <?php echo $__env->yieldContent('content'); ?>

</div>

<script type="text/javascript">
    window.csrfToken = '<?php echo e(csrf_token()); ?>';
</script>

<script type="text/javascript" src="/js/app.js"> /* minified global js, plugins,... */</script>

<?php echo $__env->yieldContent('js'); ?>


</body>
</html>
<?php /**PATH C:\MAMP\htdocs\library\resources\views/layout.blade.php ENDPATH**/ ?>