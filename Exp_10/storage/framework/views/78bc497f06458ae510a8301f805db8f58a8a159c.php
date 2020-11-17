

<?php $__env->startSection('content'); ?>
<section class="text-gray-700 body-font bg-gray-200 mt-16">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h3 class="title-font sm:text-4xl text-3xl font-medium text-orange-400">Let's find</h3>
        <h1 class="title-font sm:text-5xl text-3xl mb-5 font-medium text-gray-900 font-bold text-red-600 ">LIFE BED NEAR YOU</h1>
      <p class="mb-8 leading-relaxed">Cot helps you in finding Hospital nearby your 
        current location to help you in emergencies. It
        shows the availablibility of beds for Covid as 
        well non-covid patients</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-800 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="<?php echo e(url('/hospitalinfo')); ?>">Find bed</a></button>
    </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="public/images/Asset 5@4x.png">
    </div>
  </div>
</section>

<!--Hero 2-->

<section class="text-gray-700 body-font bg-orange-300">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="public/images/Asset 9@4x.png">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h3 class="title-font sm:text-4xl text-3xl font-medium text-indigo-800 ">Know the</h3>
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 font-bold text-red-600">COVID COUNT IN YOUR DISTRICT</h1>
        <p class="mb-8 leading-relaxed">Cot will help you in finding the number of
            COVID-19 patients in your district. Yo’ll get an
            idea about Total number of cases, Active cases
            and number ofdeseaced cases</p>
        <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-800 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"><a href="<?php echo e(url('/coronacount')); ?>">Count</a></button>
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/front.blade.php ENDPATH**/ ?>