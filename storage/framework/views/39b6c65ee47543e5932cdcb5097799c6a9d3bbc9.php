<?php if($paginator->hasPages()): ?>
  
        <div class="pagination">
            
            <?php if($paginator->onFirstPage()): ?>

                <a href="" style="pointer-events: none; opacity:0.5;">&laquo;</a>
            <?php else: ?>
        
                <a href="<?php echo e($paginator->previousPageUrl()); ?>">&laquo;</a>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
        
                    <a href="" style="pointer-events: none;"><?php echo e($element); ?></a>
                <?php endif; ?>

                
                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            
                            <a href="" class="active"><?php echo e($page); ?></a>
                        <?php else: ?>
                           
                            <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
               

                <a href="<?php echo e($paginator->nextPageUrl()); ?>">&raquo;</a>
            <?php else: ?>
            

                <a href="" style="pointer-events: none; opacity:0.5;">&raquo;</a>
            <?php endif; ?>
            </div>

<?php endif; ?>
<?php /**PATH C:\Users\Abhay pratap singh\Desktop\xamp\htdocs\blognew\resources\views/vendor/pagination/default.blade.php ENDPATH**/ ?>