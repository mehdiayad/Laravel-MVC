<?php if($paginator->hasPages()): ?>
    <ul class="pagination col-4 col-sm-4 mx-auto d-flex justify-content-center mt-3"  style="width:200px;" role="navigation">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled " aria-disabled="true" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>">
                <span class="page-link text-dark border-0 rounded mr-2" aria-hidden="true">Precedent</span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <a class="page-link text-dark rounded mr-2" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>">Precedent</a>
            </li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled" aria-disabled="true">
                	<span class="page-link text-dark"><?php echo e($element); ?></span>
                </li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active" aria-current="page">
                        	<span class="page-link text-dark rounded"><?php echo e($page); ?></span>
                    	</li>
                    <?php else: ?>
                        <li class="page-item">
                        	<a class="page-link text-dark rounded ml-2 mr-2" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    	</li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link text-dark bg-light rounded ml-2" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>">Suivant</a>
            </li>
        <?php else: ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>">
                <span class="page-link text-dark border-0 rounded ml-2" aria-hidden="true">Suivant</span>
            </li>
        <?php endif; ?>
    </ul>

<?php endif; ?>
<?php /**PATH /Users/Med/Desktop/PERSO/WEB/Laravel-MVC/resources/views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>