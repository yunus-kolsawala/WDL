

<?php $__env->startSection('content'); ?>


<section class="text-gray-700 body-font mt-16">
		<div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
			<div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
				<h1 class="title-font font-medium text-3xl text-gray-900">Sign In and Registeration facility is only for
					the Hospital Manager</h1>
				<p class="leading-relaxed mt-4">We request the registered users to kindly update the correct information
					of bed numbers on regular basis</p>
			</div>

			<div class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
				<h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign In</h2>
					<input id="Email"
						class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
						placeholder="Email" type="text">
					
					<input id="Password"
						class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
						placeholder="Password" type="password">
						
					<button id="submit"
						class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Sign
						In</button>
				<p class="text-xs text-gray-500 mt-3">Don't have an account?<a href="<?php echo e(url('/register')); ?>"><b> Register</b></a>
				</p>

			</div>

		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="public/signin.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/signin.blade.php ENDPATH**/ ?>