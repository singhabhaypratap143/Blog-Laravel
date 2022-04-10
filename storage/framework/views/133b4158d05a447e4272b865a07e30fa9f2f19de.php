<?php $__env->startSection('main'); ?>
    <!-- main -->
    <main class="container">
        <h2 class="header-title">All Blog Posts</h2>
       <?php echo $__env->make('includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="searchbar">
            <form action="">
                <input type="text" placeholder="Search..." name="search" />

                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>

            </form>
        </div>
        <div class="categories">
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('blog.index', ['category' => $category->name ])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <section class="cards-blog latest-blog">
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card-blog-content">
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(auth()->user()->id === $post->user->id): ?>
                            <div class="post-buttons">
                                <a href="<?php echo e(route('blog.edit', $post)); ?>">Edit</a>
                                <form action="<?php echo e(route('blog.destroy', $post)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <input type="submit" value=" Delete">
                                </form>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <img src="<?php echo e(asset($post->imagePath)); ?>" alt="" />
                    <p>
                        <?php echo e($post->created_at->diffForHumans()); ?>

                        <span>Written By <?php echo e($post->user->name); ?></span>
                    </p>
                    <h4>
                        <a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></a>
                    </h4>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>Sorry, currently there is no blog post related to that search!</p>
            <?php endif; ?>

        </section>
        <!-- pagination -->

        <?php echo e($posts->links('pagination::default')); ?>

        <br>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abhay pratap singh\Desktop\xamp\htdocs\blognew\resources\views/blogPosts/blog.blade.php ENDPATH**/ ?>