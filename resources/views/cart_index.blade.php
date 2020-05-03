@extends('template1')

@section('contenu')

@php 
	$card_total_price = 0 
@endphp
	
	<div class="container-fluid">
		<div class="row">
    		<div class="col-9 col-sm-9">
    		
            	<h4> Mon Panier </h4>	
            	<div class="bg-dark pt-1 w-100"> </div>
            	
    			@isset($cart_articles_custom)
					@if ($cart_articles_custom->count()>0)
					
						@php 	
							$last_article = $cart_articles_custom->last() 
						@endphp
						
						<div class="container-fluid">
                			<div class="row">
                    			@foreach ($cart_articles_custom as $cart_article_custom)
    								<div class="col-12 col-sm-12 pt-2 pb-2">
            							<div class="row">
            								<div class="col-3 col-sm-3">
												<img alt="product_img_cart" class="product_img_cart rounded mx-auto d-block w-100" src='{{ url("/images/products/$cart_article_custom->img_overview") }}'/>
            								</div>
            								
            								<div class="col-6 col-sm-6">
            								    											
    											{!! link_to_route('product.show', $cart_article_custom->description_title, $cart_article_custom->product_id , ['class' => 'text-primary']) !!}
          										
          										
          										@if($cart_article_custom->stock >= 15)
          											<p class="text-success"> En Stock </p>
          										@else
          											<p class="text-danger"> Plus que {{$cart_article_custom->stock}} restants </p>
          										@endif
          										                                    				
                              					{!! Form::open(['route' => ['cart.update',$cart_article_custom->cart_id], 'method' => 'put', 'class' => 'form-inline']) !!}	
                                                  
													<span> 
														Quantite : {!! Form::selectRange('product_quantity', 1, 10, $cart_article_custom->product_quantity ) !!}
													 </span>
													
													<span> 
                            							{!! Form::submit('Modifier', ['class' => 'btn btn-primary btn-block btn-sm ml-3']) !!}
													 </span>
                                            
                                                	<div class="d-none"> 
                                    					<span class="h5"> Product ID : </span>
                                    					{!! Form::text('product_id',$cart_article_custom->product_id, ['class' => 'w-25']) !!}
                        		    				</div>
                        		    				
                        		    				<div class="d-none"> 
                                    					<span class="h5"> Product Price : </span>
                                    					{!! Form::text('product_price',$cart_article_custom->price, ['class' => 'w-25']) !!}
                        		    				</div>
                        		    				
                		    				    	<div class="d-none"> 
                                    					<span class="h5"> Cart ID : </span>
                                    					{!! Form::text('cart_id',$cart_article_custom->cart_id, ['class' => 'w-25']) !!}
                        		    				</div>
                            							
                            					{!! Form::close() !!}   
                            					   
  
                                				<p class="d-none"> Cart ID : {{ $cart_article_custom->cart_id }} </p> 
                                				
                                				<div class="mt-5" style="max-width:150px;">    				    								
				    								{!! Form::open(['method' => 'DELETE', 'route' => ['cart.destroy', $cart_article_custom->cart_id]]) !!}
                    									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')']) !!}
                    								{!! Form::close() !!}
                                				</div>
                                				
               								</div>
               								
            								<div class="col-3 col-sm-3  text-right pt-2">
												<div class="h4 text-danger">{{ number_format($cart_article_custom->price, 2) }} € </div>
            								</div>
                      							
                  							@php
                  								$card_total_price += $cart_article_custom->cart_price
                  							@endphp
                  							
                    					</div>
                    				</div>
                    				
                    				@if($cart_article_custom != $last_article)
                    					<div class="bg-dark pt-1 w-100 mt-2 mb-2"> </div>
                    				@endif
    								
                    			@endforeach
        					</div>
    					</div>
                	@else
						<div class="container-fluid">
                			<div class="row mt-5">
                				<p> Votre panier est vide pour le moment.Faites un tour dans nos differentes categories : Informatique / Mode / Meubles / Bricolage ... </p>
            					<p>	Vous trouverez surement quelque chose a votre gout. </p>
    						</div>
    					</div>
                	@endif
            	@endisset
    		</div>
    		
    		<div class="col-3 col-sm-3">
    			<div class="container-fluid ">
    				<div class="row border rounded bg-light p-2">
    					<div class="col-12 col-sm-12 pb-2">
    						<h4> Total : <span class="text-danger"> {{ number_format($card_total_price, 2) }} € </span></h4>
    						
    						@if ($card_total_price>0)
    							{!! link_to_route('cart.confirm', 'Passer la commande', [], ['class' => 'btn btn-primary mt-3 w-100']) !!}
    						@else
    							{!! link_to_route('cart.confirm', 'Passer la commande', [], ['class' => 'btn btn-primary mt-3 w-100 disabled']) !!}
    						@endif
    					</div>
    				</div>
    			</div>
   			</div>
   			
   			    	
		</div>    	
	</div>
            	
            	    	

	
@endsection