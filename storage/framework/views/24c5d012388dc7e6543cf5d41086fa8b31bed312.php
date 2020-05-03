<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Laravel-MVC </title> 
        
        <!-- ICON -->
        <link rel="icon" href="<?php echo url('/images/laravel-logo.png'); ?>"/>
        
        <!-- CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" >        
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/style.css')); ?>" />
    
        <!-- FONTS -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">    

		<!-- SCRIPTS -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<!-- <script src="<?php echo e(asset('js/app.js')); ?>" defer></script> NOT USING VUE.JS FOR THIS APP -->
		
		<!--[if lt IE 9]>
			<?php echo e(Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js')); ?>

			<?php echo e(Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')); ?>

		<![endif]-->
		
		<style> textarea { resize: none; } </style> 
	</head>
	<body>
        
        <div class="app">
            <div class="container-fluid ">
            	<div class="row bg-dark align-items-center pt-3 pb-3 ">
      
            		<div class="col-1 col-sm-1 text-center">
            			<a href="<?php echo e(url('/home')); ?>">
    						<h2>Laravel</h2>        			
    					</a>
                  	</div>                   
                  		        	
                 	<div class="col-6 offset-2 col-sm-6 offset-sm-2">
    					<?php echo Form::open(['url' => 'product']); ?>

                                <div class="input-group">
                                                            	 
                                    <!-- 1st element CHANGE -->
                                    <div class="input-group-prepend">
                                    <?php if(session()->has('categories')): ?>
                                    	<?php if(session()->has('category_selected')): ?>
                                    		<?php echo Form::select('category_name', session('categories'), session('category_selected') , ['class' => 'bg-primary text-white rounded-0', 'placeholder' => 'Toutes les categories']); ?>

                                   		<?php else: ?>
                                    		<?php echo Form::select('category_name', session('categories'), null , ['class' => 'bg-primary text-white rounded-0', 'placeholder' => 'Toutes les categories']); ?>

                                   		<?php endif; ?>
                           			<?php else: ?>
                                    		<?php echo Form::select('category_name', [], session('category_selected') , ['class' => 'bg-primary text-white rounded-0', 'placeholder' => 'Toutes les categories']); ?>

                           			<?php endif; ?>
                           			
                                    </div>  
            
                                	<!-- 2nd element -->  
                                	<?php if(session()->has('product_selected')): ?>
        								<?php echo Form::text('product_name', session('product_selected'), ['class' => 'form-control input search-bar']); ?>

                               		<?php else: ?>
        								<?php echo Form::text('product_name', null, ['class' => 'form-control input search-bar', 'placeholder' => 'Entrer un produit']); ?>

                               		<?php endif; ?>
                               		
                                	<!-- 3rd element -->
        							<div class="input-group-append">
    									<?php echo Form::button('<i class="fa fa-search text-white" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn bg-primary pl-3 pr-3'] ); ?>

                                    </div>
                                    
                                </div>
        					<?php echo Form::close(); ?>

                        </div>
                                        
        				<div class="col-2 col-sm-2 text-center ">
         					<ul class="navbar-nav mx-auto" style="max-width:160px;">
                                <!-- Authentication Links -->
                                <?php if(auth()->guard()->guest()): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    </li>
                                    <?php if(Route::has('register')): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                    
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle bg-white text-dark rounded" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                        </a>
            
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        
                                      		<a class="dropdown-item" href="<?php echo e(url('/user')); ?>">
                                      			Utilisateurs
                                  			</a>
                                        
                                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Deconnexion')); ?>

                                            </a>
                                          
                                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                           
     
                                        </div>
                                    </li>
                                    
                                <?php endif; ?>
                            </ul>
            			</div>
            			
            			
            			 <div class="col-1 col-sm-1">
            			 	<div class="row">
                    			<div class="col-12 col-sm-12 text-danger card_number">
                     				<?php if(session()->has('cart_articles')): ?>
                     					<h3> <?php echo e(session('cart_articles')); ?></h3>
                     				<?php endif; ?>
                     			</div>
        
                     			<div class="col-12 col-sm-12 card_shop">
                     				<a href="<?php echo e(route('cart.index')); ?>"><i class="fas fa-shopping-cart fa-3x text-white"></i></a>
                     			</div>
                     		</div>
        				</div>
                            			
            	</div>
           </div>
                 
    
            <div class="container-fluid pt-4 pb-4">
            	<div class="row bloc_page pl-0 pr-0">
        				<?php echo $__env->yieldContent('contenu'); ?>        				
        	  	</div>
           </div>
               		
    		<footer class="bg-dark text-white text-center pt-3 pb-3">
    			<div> VERSION [ <?php echo e(config('app.version')); ?> ] </div>
    		</footer>
    		
    		
    		
            <!-- EXTRA SCRIPTS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            <script src="<?php echo e(url('/js/custom.js')); ?>"></script>  
        
       </div>
	</body>
</html><?php /**PATH C:\env\web\Laravel-MVC\resources\views/template1.blade.php ENDPATH**/ ?>