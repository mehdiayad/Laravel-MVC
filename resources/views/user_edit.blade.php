@extends('template1')

@section('contenu')
    <div class="offset-sm-4 col-sm-4">
		<div class="card">	
			<div class="card-header bg-primary text-white">Modification d'un utilisateur</div>
			<div class="card-body"> 
				
				@isset($user)
    				<div class="col-sm-12">
    					{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
    					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
    					  	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
    					  	{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
    					</div>
    					<div class="form-group {!! $errors->has('login') ? 'has-error' : '' !!}">
    					  	{!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Identifiant']) !!}
    					  	{!! $errors->first('login', '<small class="help-block">:message</small>') !!}
    					</div>
    					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
    					  	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    					  	{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
    					</div>
    					<div class="form-group">
    						<div class="checkbox">
    							<label>
    								{!! Form::checkbox('admin', 1, null) !!} Administrateur
    							</label>
    						</div>
    					</div>
    						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary mt-3 float-right']) !!}
    					{!! Form::close() !!}
    				</div>
				@endisset
				
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary mt-2">
			<i class="fas fa-long-arrow-alt-left"></i> Retour
		</a>
	</div>
@endsection