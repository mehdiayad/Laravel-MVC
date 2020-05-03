@extends('template1')

@section('contenu')
	
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
                		
                		
                		@isset($user_billing_addresses)
                			@foreach ($user_billing_addresses as $user_billing_address)
							
                				<div class="col-4 col-sm-4 mb-3">
    								<div class="card" style="height:265px;">
    								        									
    									@if ($user_billing_address->is_default == '1')
    										<div class="card-header bg-primary text-white"> Par defaut : Facturation </div>
    									@else
    										<div class="card-header bg-primary text-white"> Facturation </div>
    									@endif
    									
									
    								  	<div class="card-body">
    								
                            				<div class="h4"> {{ $user_billing_address->full_name }} </div>
                            				<div> {{ $user_billing_address->address }} , {{ $user_billing_address->city }} </div>
                            				<div> {{ $user_billing_address->country }} </div>
                            				<div> Telephone : {{ $user_billing_address->cell_number }} </div>
                            				
                                            <div class="container-fluid mt-4">
                                        		<div class="row">                   
                                        		     				
                                    				<div class="col-6 col-sm-6 text-right p-1">   
    			        								<a class="btn btn-dark btn-block text-white " href='{{ url("address/{user_billing_address->id}/edit") }}'> Modifier </a>
                                    				</div>
                                    				
                                    				<div class="col-6 col-sm-6 text-right p-1">    				    								
                	    								{!! Form::open(['method' => 'DELETE', 'route' => ['address.destroy', $user_billing_address->id]]) !!}
                        									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette addrese ?\')']) !!}
                        								{!! Form::close() !!}
                                    				</div>
                                				</div>
                            				</div>
                            			</div>
                        			</div>
                        		</div>
                		                    			
                			@endforeach
                		@endisset
                		
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
                		
                		
                		@isset($user_shipping_addresses)
                			@foreach ($user_shipping_addresses as $user_shipping_address)
							
                				<div class="col-4 col-sm-4 mb-3">
    								<div class="card" style="height:265px;">
    								        									
    									@if ($user_shipping_address->is_default == '1')
    										<div class="card-header bg-primary text-white"> Par defaut : Livraison </div>
    									@else
    										<div class="card-header bg-primary text-white"> Livraison </div>
    									@endif
    									
									
    								  	<div class="card-body">
    								
                            				<div class="h4"> {{ $user_shipping_address->full_name }} </div>
                            				<div> {{ $user_shipping_address->address }} , {{ $user_shipping_address->city }} </div>
                            				<div> {{ $user_shipping_address->country }} </div>
                            				<div> Telephone : {{ $user_shipping_address->cell_number }} </div>
                            				
                                            <div class="container-fluid mt-4">
                                        		<div class="row">                   
                                        		     				
                                    				<div class="col-6 col-sm-6 text-right p-1">   
    			        								<a class="btn btn-dark btn-block text-white " href='{{ url("address/{user_shipping_address->id}/edit") }}'> Modifier </a>
                                    				</div>
                                    				
                                    				<div class="col-6 col-sm-6 text-right p-1">    				    								
                	    								{!! Form::open(['method' => 'DELETE', 'route' => ['address.destroy', $user_shipping_address->id]]) !!}
                        									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette addrese ?\')']) !!}
                        								{!! Form::close() !!}
                                    				</div>
                                				</div>
                            				</div>
                            			</div>
                        			</div>
                        		</div>
                		                    			
                			@endforeach
                		@endisset
                		
            		</div> 
        		</div> 
			</div>    	
		</div>    	
	</div>
            	   
@endsection