<!doctype html>
<html>
<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<div class="container">

    <header class="row">
        <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>

    <div id="main" class="row">
        <div class = col-xs-4>
           <?php echo $__env->make('includes.bio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        </div>
        <div class = col-xs-8>
           <?php echo $__env->yieldContent('content'); ?>
       </div>
    </div>
</div>
    <footer class="row">
      <?php echo $__env->make('includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </footer>


</body>
</html>