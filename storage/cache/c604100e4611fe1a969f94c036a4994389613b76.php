<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">


        <?php echo e($_SESSION['errors']); ?>


        <form class="bg-white shadow-md hover:shadow-xl rounded-lg w-1/2 p-4 mt-10 flex justify-around flex-wrap items-center" method="POST" action="/login">
            <h1 class="text-2xl text-gray-600">
                Logout
            </h1>

            <?php echo "<input type='hidden' name='csrf_value' value='cf5ebfd3d562e4dd985f9cce04ac5bc3' /> \n <input type='hidden' name='csrf_name' value='csrf5e97f46f130f3' />"; ?>

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                class="w-full border-2 focus:shadow-md rounded-lg p-4 mt-6"
            />

            <input
                type='password'
                name='password'
                placeholder="Password"
                class="w-full border-2 focus:shadow-md rounded-lg p-4 mt-6"
            />

            <button type="submit" class="bg-blue-500 w-1/2 text-white focus:shadow-md border-2 rounded-lg p-4 mt-6">
                Login
            </button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/auth/login.blade.php ENDPATH**/ ?>