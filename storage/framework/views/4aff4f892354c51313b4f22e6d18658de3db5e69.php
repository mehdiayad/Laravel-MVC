<?php $__env->startSection('contenu'); ?>
	
<?php 
	$card_total_price = 0 
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-11 col-sm-11 mx-auto">
			
		
            	<div class="container-fluid">
            		<div class="row">
                		
                		<div class="col-9 col-sm-9 ">
                        	<div class="container-fluid pt-3 pb-3">
                        		<div class="row"> 	
                            		
                            		<div class="col-4 col-sm-4"> 	
                            			<h4> 1. Adresse de facturation </h4>
                					</div>  
                					
                					<?php if(isset($user_default_billing_address)): ?>
                    					<div class="col-4 col-sm-4"> 	
                                			<div> <?php echo e($user_default_billing_address->full_name); ?></div>
                                			<div> <?php echo e($user_default_billing_address->address); ?> </div>
                                			<div> <?php echo e($user_default_billing_address->city); ?> , <?php echo e($user_default_billing_address->postal_code); ?> </div>
                                			<div> <?php echo e($user_default_billing_address->country); ?> </div>
                    					</div>  
                    					<div class="col-4 col-sm-4 d-flex align-items-center justify-content-center"> 	
    										<?php echo link_to_route('address.index', 'Modifier', null, ['class' => 'btn btn-dark btn-block text-white', 'style' => 'max-width:150px;']); ?>

                    					</div>  
                					<?php endif; ?>
            					</div>  
            				</div>
            				
            				<div class="bg-dark pt-1"></div>
            				
                        	<div class="container-fluid pt-3 pb-3">
                        		<div class="row"> 	
                            		
                            		<div class="col-4 col-sm-4"> 	
                            			<h4> 2. Adresse de livraison </h4>
                					</div>  
                					
                					<?php if(isset($user_default_shipping_address)): ?>
                    					<div class="col-4 col-sm-4"> 	
                                			<div> <?php echo e($user_default_shipping_address->full_name); ?></div>
                                			<div> <?php echo e($user_default_shipping_address->address); ?> </div>
                                			<div> <?php echo e($user_default_shipping_address->city); ?> , <?php echo e($user_default_shipping_address->postal_code); ?> </div>
                                			<div> <?php echo e($user_default_shipping_address->country); ?> </div>
                    					</div>  
                    					<div class="col-4 col-sm-4 d-flex align-items-center justify-content-center"> 	
    										<?php echo link_to_route('address.index', 'Modifier',null, ['class' => 'btn btn-dark btn-block text-white', 'style' => 'max-width:150px;']); ?>

                    					</div> 
                					<?php endif; ?>
            					</div>  
            				</div>
            				
            				<div class="bg-dark pt-1"></div>
            				            	
                        	<div class="container-fluid pt-3 pb-3">
                        		<div class="row"> 	
                            		<div class="col-12 col-sm-12"> 	
                            			<h4> 3. Verification de la commande </h4>
                                        <div class="container-fluid">
											<?php if(isset($cart_articles_custom)): ?>	
												
												<?php 	
													$last_article = $cart_articles_custom->last() 
												?>
												
												<?php $__currentLoopData = $cart_articles_custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_article_custom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    				<div class="row mt-4"> 	
    													<div class="col-3 col-sm-3">
        													<img alt="address_product_img" class="address_product_img rounded mx-auto d-block w-100" src='<?php echo e(url("/images/products/$cart_article_custom->img_overview")); ?>'/>
                    									</div>
                    									
                										<div class="col-9 col-sm-9">
                                    						
                                    						<?php echo Form::label('address_product_title',$cart_article_custom->description_title,null); ?>

                                        					
                                        					<div> Qte : <?php echo Form::label('address_product_quantity',$cart_article_custom->product_quantity); ?> </div>
                                        					
                                        					<div> Prix unitaire : <?php echo Form::label('address_product_price',number_format($cart_article_custom->price, 2)); ?> € </div>
                    									
                                        					<div class="text-danger font-weight-bold"> Prix total : <?php echo Form::label('address_product_price', number_format(($cart_article_custom->product_quantity*$cart_article_custom->price), 2)); ?> € </div>
                    									
				    										<?php echo link_to_route('cart.index', 'Modifier',null, ['class' => 'btn btn-dark btn-block text-white', 'style' => 'max-width:150px;']); ?>

                    									
                    									</div>
                									</div>
                									
                									<?php if($cart_article_custom != $last_article): ?>
						            					<div class="cart_confirm_line"></div>
                									<?php endif; ?>
                									
                									<?php
                          								$card_total_price += $cart_article_custom->cart_price
                          							?>
                      							
        										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        									<?php endif; ?>
            							</div> 
            						</div> 
            					</div>  
            					                    					
        					</div>  
        					
        				</div>  
                        					                			
            			<div class="col-3 col-sm-3 ">
            				<div class="border rounded p-3" style="height:270px;">
            					
            					<?php echo link_to_route('cart.confirm', 'Acheter',null, ['class' => 'btn btn-danger btn-block text-white mx-auto mb-2']); ?>

            					
            					<div class="small"> En passant votre commande, vous acceptez les Conditions générales de vente. Veuillez consulter notre Notice : données personnelles, notre Notice Cookies et notre Notice Annonces publicitaires basées sur vos centres d’intérêt.</div>
                				
                				<div class="bg-dark pt-1 mt-3 mb-3 mx-auto"></div>
            					
            					<h5 class="text-center mb-3"> Recapitulatif de la commande </h5>
            					
            					<h5 class="text-danger "> Montant total : <span class="float-right"> <?php echo e(number_format($card_total_price, 2)); ?> € </span> </h5>
            					
            				</div>
            			</div>   
            			
            			 	
            		</div>    	
            	</div>
            	
            	
            	
			</div>    	
		</div>    	
	</div>
            	   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Med/Desktop/PERSO/WEB/Laravel-MVC/resources/views/cart_confirm.blade.php ENDPATH**/ ?>