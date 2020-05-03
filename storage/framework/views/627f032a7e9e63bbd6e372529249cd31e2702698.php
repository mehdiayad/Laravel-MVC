<?php $__env->startSection('contenu'); ?>

	<!-- Method 1 
    <div class="col-9 col-sm-9 co-md-9 col-lg-7 col-xl-6 mx-auto pt-3" > -->
    	
	<!-- Method 2 -->
    <div class="col-9 col-sm-9 mx-auto pt-3" style="max-width:800px;">
    
    
    	<?php if(session()->has('ok')): ?>
			<div class="alert alert-success"><?php echo session('ok'); ?></div>
		<?php endif; ?>
		
		<div class="card">
			<div class="card-header bg-primary text-white"> Liste des utilisateurs </div>
			<div class="card-body">
			
				<?php if(isset($users)): ?>
			
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
        					<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        						<tr>
        							<td><?php echo $user->id; ?></td>
        							<td><?php echo $user->name; ?></td>
        							<td><?php echo link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']); ?></td>
        							<td><a class="btn btn-warning text-white btn-block" href='<?php echo e(url("user/{$user->id}/edit")); ?>'> Modifier </a></td>
        							<td>
        								<?php echo Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]); ?>

        									<?php echo Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']); ?>

        								<?php echo Form::close(); ?>

        							</td>
        						</tr>
        					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	  			</tbody>
        			</table>
				<?php endif; ?>
			</div>
			
		</div>
		<?php echo link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-primary mt-3 float-right']); ?>

		
		
		<?php if(isset($users)): ?>
			<?php echo $users->links(); ?>

		<?php endif; ?>
		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Med/Desktop/PERSO/WEB/Laravel5/resources/views/user_index.blade.php ENDPATH**/ ?>