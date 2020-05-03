@extends('template1')

@section('contenu')
	<div class="offset-sm-4 col-sm-4">
		<br>
		<div class="card">	
			<div class="card-header bg-primary text-white">Création d'un utilisateur</div>
			<div class="card-body"> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}	
					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
						{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('login') ? 'has-error' : '' !!}">
						{!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Identifiant']) !!}
						{!! $errors->first('login', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
						{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
					</div>
					<div class="form-group {!! $errors->has('role') ? 'has-error' : '' !!}">
						{!! Form::password('role', ['class' => 'form-control', 'placeholder' => 'Role']) !!}
						{!! $errors->first('role', '<small class="help-block">:message</small>') !!}
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
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary mt-2">
			<i class="fas fa-long-arrow-alt-left"></i> Retour
		</a>
	</div>
@endsection