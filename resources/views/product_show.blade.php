@extends('template1')

@section('contenu')
	
	@isset($product)	
        <div class="container-fluid">
            <div class="row" style="min-height:500px;">
    			
		    	@if(session()->has('ok'))
		    		<div class="col-12 col-sm-12">
        				<div class="text-center alert alert-success mx-auto" style="width:500px;">{!! session('ok') !!}</div>
        			</div>
        		@endif
		
    			<div class="col-1 col-sm-1 col-product">
	            	<div class="row">
	            		<div class="col-12 col-sm-12"> <a  href="#"><img alt="product_img_show_1" class="product_img_show_mini product_img_show_1 img-fluid  mt-3 border rounded w-100" src=' {{ url("/images/products/$product->img1") }}'/></a></div>
	            		<div class="col-12 col-sm-12"> <a  href="#"><img alt="product_img_show_2" class="product_img_show_mini product_img_show_2 img-fluid  mt-3 border rounded w-100" src=' {{ url("/images/products/$product->img2") }}'/></a></div>
	            		<div class="col-12 col-sm-12"> <a  href="#"><img alt="product_img_show_3" class="product_img_show_mini product_img_show_3 img-fluid  mt-3 border rounded w-100" src=' {{ url("/images/products/$product->img3") }}'/></a></div>
	            	</div>
    			</div>
    			
    			<div class="col-4 col-sm-4 col-product d-flex align-items-center">

	            		<div class="col-12 col-sm-12"> <img alt="product_img_display" id="product_img_show_display" class="product_img_show_display img-fluid w-100" src=' {{ url("/images/products/$product->img1") }}'/></div>
    			</div>
    			
    			<div class="col-4 col-sm-4 col-product">
    				<h5> {{ $product->description_title }}</h5>
    				<p class="pb-0 mb-0"> De <span class="text-primary h5">{{ $product->brand }}</span></p>
    				
    				@for ($i=0;$i<5;$i++)
    					@if ($product->score>$i)
    						<i class="fas fa-star text-dark"></i>
						@else
    						<i class="far fa-star text-dark"></i>
						@endif
    					
					@endfor
    				
    				<div class="pb-1 mb-2 bg-dark"></div>
    				
    				<p> Prix : <span class="text-danger h5">{{ number_format($product->price, 2)}} € </span></p>
    				
    				@php 
    					$descriptions = explode(".",$product->description_product) 
					@endphp
    				
    				<ul>
    					@for ($i=0; $i< count($descriptions); $i++) 
    						@if ( strlen($descriptions[$i]) > 0 )
                      			<li>{{ $descriptions[$i] }}</li>
    						@endif
                  		@endfor
                    </ul>

    			</div>
    			
    			<div class="col-3 col-sm-3 col-product d-flex justify-content-center">
    				<div class="container-fluid">
    					<div class="row">
    						<div class="col-9 col-sm-9 border rounded p-3 mx-auto">
    				
            					{!! Form::open(['route' => 'cart.store']) !!}	
                				
                        				<div>
                        					@if ($product->stock >= 15)
                        						<h4 class="text-primary"> En Stock </h4>
                								<h5 class="mt-5"> Quantite : {!! Form::selectRange('product_quantity', 0, 15) !!} </h5>
                        					@else
                        						<h4 class="text-danger"> Plus que {{ $product->stock }} restants </h4>
                								<h5 class="mt-5"> Quantite : {!! Form::selectRange('product_quantity', 0, $product->stock ) !!} </h5>
                        					@endif
                        				</div>
                    					      				
                        				<div class="d-none"> 
                        					<span class="h5"> Product ID : </span>
                        					{!! Form::text('product_id',$product->id, ['class' => 'w-25']) !!}
            		    				</div>
            		    				
            		    				<div class="d-none"> 
                        					<span class="h5"> Product Price : </span>
                        					{!! Form::text('product_price',$product->price, ['class' => 'w-25']) !!}
            		    				</div>
            		    				
            							{!! Form::submit('Ajouter au panier', ['class' => 'btn btn-primary btn-block mt-5']) !!}							
            							
            					{!! Form::close() !!}
            					
            							
        						{!! link_to_route('cart.index', 'Voir le panier', [], ['class' => 'btn btn-danger mt-3 w-100']) !!}
            					
							</div>
						</div>
					</div>
    			</div>
    		</div>
    	</div>
	@endisset
@endsection

