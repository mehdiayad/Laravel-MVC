@extends('template1')

@section('contenu')

	<!-- Method 1 
    <div class="col-9 col-sm-9 co-md-9 col-lg-7 col-xl-6 mx-auto pt-3" > -->
    	
	<!-- Method 2 -->
    <div class="col-9 col-sm-9 mx-auto pt-3" style="max-width:800px;">
    
    
    	@if(session()->has('ok'))
			<div class="alert alert-success">{!! session('ok') !!}</div>
		@endif
		
		<div class="card">
			<div class="card-header bg-primary text-white"> Liste des utilisateurs </div>
			<div class="card-body">
			
				@isset($users)
			
        			<table class="table">
        				<thead>
        					<tr>
        						<th>#</th>
        						<th>Nom</th>
        						<th></th>
        						<th></th>
        						<th></th>
        					</tr>
        				</thead>
        				<tbody>
        					@foreach ($users as $user)
        						<tr>
        							<td>{!! $user->id !!}</td>
        							<td>{!! $user->name !!}</td>
        							<td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
        							<td><a class="btn btn-warning text-white btn-block" href='{{ url("user/{$user->id}/edit") }}'> Modifier </a></td>
        							<td>
        								{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
        									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
        								{!! Form::close() !!}
        							</td>
        						</tr>
        					@endforeach
        	  			</tbody>
        			</table>
				@endisset
			</div>
			
		</div>
		{!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-primary mt-3 float-right']) !!}
		
		
		@isset($users)
			{!! $users->links() !!}
		@endisset
		
	</div>
@endsection