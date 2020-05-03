<?php $__env->startSection('titre'); ?>
	Not Found
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    
    <div class="col-5 col-sm-5 mx-auto">
    	<div class="card">
    		<div class="card-header bg-danger text-white">
    			<h4>Il y a un problème !</h4>
    		</div>
    		<div class="card-body"> 
    			<p>Nous sommes désolés mais la page que vous désirez n'existe pas...</p>
    		</div>
    	</div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\env\web\Laravel-MVC\resources\views/errors/404.blade.php ENDPATH**/ ?>