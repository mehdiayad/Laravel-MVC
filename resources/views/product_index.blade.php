@extends('template1')

@section('contenu')
	
	@isset($products)
	
		@if (count($products)>0)
		
        <div class="container-fluid ">
            <div class="row">
        		@foreach ($products as $product)
        			<div class="col-3 col-sm-3">
    					<div class="rounded pt-5 pl-2 pr-2">
    						<a href='{{ url("/product/{$product->id}") }}' class="bloc_clic text-decoration-none">
    							<div class="bloc_image mb-2"> <img alt="product" class="product_img_index rounded mx-auto d-block w-75" src='{{ url("/images/products/$product->img_overview") }}'/></div>
    							<div class="bloc_price h6">{{ number_format($product->price, 2) }} € </div>
    							<div class="bloc_title "><p class="small">{{ $product->description_title }}</p></div>
    						</a>
    					</div>
        			</div>
        		@endforeach
    		</div>
    		
		{{ $products->links() }}
    	
    	</div>
    			
    	@else
        <div class="container-fluid pl-5 pr-5">
			<h3> Aucun produit ne correspond a votre recherche.</h3>
			<p> Verifiez que la categorie choisie est en accord avec le produit recherche. Vous pouvez aussi lancer une recherche par default pour visualiser tous les produits existants.</p>
    	</div>    	
    	@endif
	@endisset

		
@endsection