@extends('template1')


@section('contenu')
    <div class="offset-sm-4 col-sm-4">
    	<br>
		<div class="card">	
			<div class="card-header bg-primary text-white">Fiche d'utilisateur</div>
			<div class="card-body"> 
				
				@isset($user)
				
    				<p>Nom : {{ $user->name }}</p>
    				<p>Email : {{ $user->email }}</p>
    				@if($user->admin == 1)
    					Administrateur
    				@endif
				@endisset
				
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary mt-2">
			<i class="fas fa-long-arrow-alt-left"></i> Retour
		</a>
	</div>
@endsection