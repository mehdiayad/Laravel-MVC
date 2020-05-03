<?php $__env->startSection('contenu'); ?>
	
	<div class="container-fluid">
		<div class="row">
    		<div class="col-9 col-sm-9 mx-auto ">
 				<div class="container-fluid">
            		<div class="row ">
            		    		
        				<div class="col-12 col-sm-12 mb-3 h4"> Mes Adresses de facturation </div>
        	
            		
                		<div class="col-4 col-sm-4" style="height:265px;">
            				<a href="#" class="w-100 h-100">
        						<div class="text-center w-100 h-100 border rounded pt-5" > 
        						
                    				<div class="text-center text-dark"> 
                    					<i class="far fa-plus-square fa-8x "></i> 
                    				</div>
                    				<div class="mt-3 h4 text-dark "> 
                    					Ajouter une addresse 
                    				</div>
                    				
        						</div>
                			</a>
                		</div>
                		
                		
                		<?php if(isset($user_billing_addresses)): ?>
                			<?php $__currentLoopData = $user_billing_addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_billing_address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
                				<div class="col-4 col-sm-4 mb-3">
    								<div class="card" style="height:265px;">
    								        									
    									<?php if($user_billing_address->is_default == '1'): ?>
    										<div class="card-header bg-primary text-white"> Par defaut : Facturation </div>
    									<?php else: ?>
    										<div class="card-header bg-primary text-white"> Facturation </div>
    									<?php endif; ?>
    									
									
    								  	<div class="card-body">
    								
                            				<div class="h4"> <?php echo e($user_billing_address->full_name); ?> </div>
                            				<div> <?php echo e($user_billing_address->address); ?> , <?php echo e($user_billing_address->city); ?> </div>
                            				<div> <?php echo e($user_billing_address->country); ?> </div>
                            				<div> Telephone : <?php echo e($user_billing_address->cell_number); ?> </div>
                            				
                                            <div class="container-fluid mt-4">
                                        		<div class="row">                   
                                        		     				
                                    				<div class="col-6 col-sm-6 text-right p-1">   
    			        								<a class="btn btn-dark btn-block text-white " href='<?php echo e(url("address/{user_billing_address->id}/edit")); ?>'> Modifier </a>
                                    				</div>
                                    				
                                    				<div class="col-6 col-sm-6 text-right p-1">    				    								
                	    								<?php echo Form::open(['method' => 'DELETE', 'route' => ['address.destroy', $user_billing_address->id]]); ?>

                        									<?php echo Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette addrese ?\')']); ?>

                        								<?php echo Form::close(); ?>

                                    				</div>
                                				</div>
                            				</div>
                            			</div>
                        			</div>
                        		</div>
                		                    			
                			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                		<?php endif; ?>
                		
            		</div> 
        		</div> 
			</div>    	
		</div>    	
	</div>
	
		<div class="container-fluid">
		<div class="row">
    		<div class="col-9 col-sm-9 mx-auto ">
 				<div class="container-fluid">
            		<div class="row ">
            		    		
        				<div class="col-12 col-sm-12 mb-3 h4"> Mes Adresses de livraison </div>
        	
            		
                		<div class="col-4 col-sm-4" style="height:265px;">
            				<a href="#" class="w-100 h-100">
        						<div class="text-center w-100 h-100 border rounded pt-5" > 
        						
                    				<div class="text-center text-dark"> 
                    					<i class="far fa-plus-square fa-8x "></i> 
                    				</div>
                    				<div class="mt-3 h4 text-dark "> 
                    					Ajouter une addresse 
                    				</div>
                    				
        						</div>
                			</a>
                		</div>
                		
                		
                		<?php if(isset($user_shipping_addresses)): ?>
                			<?php $__currentLoopData = $user_shipping_addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_shipping_address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
                				<div class="col-4 col-sm-4 mb-3">
    								<div class="card" style="height:265px;">
    								        									
    									<?php if($user_shipping_address->is_default == '1'): ?>
    										<div class="card-header bg-primary text-white"> Par defaut : Livraison </div>
    									<?php else: ?>
    										<div class="card-header bg-primary text-white"> Livraison </div>
    									<?php endif; ?>
    									
									
    								  	<div class="card-body">
    								
                            				<div class="h4"> <?php echo e($user_shipping_address->full_name); ?> </div>
                            				<div> <?php echo e($user_shipping_address->address); ?> , <?php echo e($user_shipping_address->city); ?> </div>
                            				<div> <?php echo e($user_shipping_address->country); ?> </div>
                            				<div> Telephone : <?php echo e($user_shipping_address->cell_number); ?> </div>
                            				
                                            <div class="container-fluid mt-4">
                                        		<div class="row">                   
                                        		     				
                                    				<div class="col-6 col-sm-6 text-right p-1">   
    			        								<a class="btn btn-dark btn-block text-white " href='<?php echo e(url("address/{user_shipping_address->id}/edit")); ?>'> Modifier </a>
                                    				</div>
                                    				
                                    				<div class="col-6 col-sm-6 text-right p-1">    				    								
                	    								<?php echo Form::open(['method' => 'DELETE', 'route' => ['address.destroy', $user_shipping_address->id]]); ?>

                        									<?php echo Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette addrese ?\')']); ?>

                        								<?php echo Form::close(); ?>

                                    				</div>
                                				</div>
                            				</div>
                            			</div>
                        			</div>
                        		</div>
                		                    			
                			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                		<?php endif; ?>
                		
            		</div> 
        		</div> 
			</div>    	
		</div>    	
	</div>
            	   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\env\web\Laravel-MVC\resources\views/address_index.blade.php ENDPATH**/ ?>