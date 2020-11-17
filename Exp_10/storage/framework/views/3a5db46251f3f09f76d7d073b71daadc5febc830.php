<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/main.css">

    <title>Cot- Save Lifes</title>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap  p-4 fixed w-full z-10 top-0 bg-gray-600 shadow-lg">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
				<img src="public/images/Asset 2@4x.png" alt="cot logo" height="40px" width="40px"/>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				
				<li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-400 hover:text-underline py-2 px-4" href="<?php echo e(url('/')); ?>">Home</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-400 hover:text-underline py-2 px-4" href="<?php echo e(url('/team')); ?>">About Us</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-400 hover:text-underline py-2 px-4" href="<?php echo e(url('/contact')); ?>">Contact us</a>
                </li>
				<?php if(!session()->has('data')): ?>
                <li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-400 hover:text-underline py-2 px-4 rounded-lg border-2 border-white hover:border-gray-400" href="<?php echo e(url('/signin')); ?>">Sign In</a>
				</li>
				<?php else: ?>
				<li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-400 hover:text-underline py-2 px-4 rounded-lg border-2 border-white hover:border-gray-400" href="<?php echo e(url('/logout')); ?>">Logout</a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
    </nav>
    
    <!--HERO Section-->

 <?php echo $__env->yieldContent('content'); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
    </script>
     <?php echo $__env->yieldContent('script'); ?>
</body>
</html><?php /**PATH C:\wamp64\www\cot2\resources\views/main.blade.php ENDPATH**/ ?>