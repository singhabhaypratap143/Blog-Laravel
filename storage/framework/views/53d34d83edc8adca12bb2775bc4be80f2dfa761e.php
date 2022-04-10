<?php $__env->startSection('main'); ?>

<!-- main -->
<main class="container">
    <section id="contact-us">
        <h1>Get in Touch!</h1>
        
        <?php echo $__env->make('includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- contact info -->
        <div class="container">
            <div class="contact-info">
                <div class="specific-info">
                    <i class="fas fa-home"></i>
                    <div>
                        <p class="title">4th floor, Hi Center</p>
                        <p class="subtitle">Moi Avenue</p>
                    </div>
                </div>
                <div class="specific-info">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <a href="">+254 720 XXX XXX </a>
                        <br />
                        <a href="">+254 721 XXX XXX</a>

                        <p class="subtitle">Mon to Fri 9am-6pm</p>
                    </div>
                </div>
                <div class="specific-info">
                    <i class="fas fa-envelope-open-text"></i>
                    <div>
                        <a href="mailto:info@alphayo.co.ke">
                            <p class="title">info@alphayo.co.ke</p>
                        </a>
                        <p class="subtitle">Send us your query anytime!</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form action="<?php echo e(route('contact.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <!-- Name -->
                    <label for="name"><span>Name</span></label>
                    <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" />
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- Email -->
                    <label for="email"><span>Email</span></label>
                    <input type="text" id="email" name="email" value="<?php echo e(old('email')); ?>" />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- Subject -->
                    <label for="subject"><span>Subject</span></label>
                    <input type="text" id="Subject" name="subject" value="<?php echo e(old('subject')); ?>" />
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <!-- Message -->
                    <label for="message"><span>Message</span></label>
                    <textarea id="message" name="message"><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abhay pratap singh\Desktop\xamp\htdocs\blognew\resources\views/contact.blade.php ENDPATH**/ ?>