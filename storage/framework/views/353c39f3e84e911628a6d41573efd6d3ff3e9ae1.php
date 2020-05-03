<?php $__env->startSection('contenu'); ?>
	
	<?php if(isset($products)): ?>
	
		<?php if(count($products)>0): ?>
		
        <div class="container-fluid ">
            <div class="row">
        		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        			<div class="col-3 col-sm-3">
    					<div class="rounded pt-5 pl-2 pr-2">
    						<a href='<?php echo e(url("/product/{$product->id}")); ?>' class="bloc_clic text-decoration-none">
    							<div class="bloc_image mb-2"> <img alt="product" class="product_img_index rounded mx-auto d-block w-75" src='<?php echo e(url("/images/products/$product->img_overview")); ?>'/></div>
    							<div class="bloc_price h6"><?php echo e(number_format($product->price, 2)); ?> € </div>
    							<div class="bloc_title "><p class="small"><?php echo e($product->description_title); ?></p></div>
    						</a>
    					</div>
        			</div>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    		</div>
    		
		<?php echo e($products->links()); ?>

    	
    	</div>
    			
    	<?php else: ?>
        <div class="container-fluid pl-5 pr-5">
			<h3> Aucun produit ne correspond a votre recherche.</h3>
			<p> Verifiez que la categorie choisie est en accord avec le produit recherche. Vous pouvez aussi lancer une recherche par default pour visualiser tous les produits existants.</p>
    	</div>    	
    	<?php endif; ?>
	<?php endif; ?>

		
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Med/Desktop/PERSO/WEB/Laravel5/resources/views/product_index.blade.php ENDPATH**/ ?>