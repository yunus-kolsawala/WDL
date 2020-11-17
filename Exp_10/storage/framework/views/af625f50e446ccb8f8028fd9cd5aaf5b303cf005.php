

<?php $__env->startSection('content'); ?>

  <!--HERO Section-->

  <section class="text-gray-700 body-font bg-orange-300 mt-16">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">

                <h1 class="title-font sm:text-4xl text-3xl font-bold text-red-600 mt-8">Find By District name</h1>
                <input id="districtName"
                    class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0 mt-2"
                    placeholder="District" type="email">
                <button
                id="by_DisName" class="mt-2 inline-flex text-white bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg" ><a href="#dragger">Search</a> </button>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="public/images/Asset 9@4x.png">
            </div>
        </div>


        <!--Count-->
        <section class="text-gray-700 body-font" id="dragger">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 id="confirmed" class="title-font font-medium sm:text-4xl text-3xl text-gray-900">NA</h2>
                  <p class="leading-relaxed">Confirmed</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 id="active" class="title-font font-medium sm:text-4xl text-3xl text-gray-900">NA</h2>
                  <p class="leading-relaxed">Active</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 id="recovered" class="title-font font-medium sm:text-4xl text-3xl text-gray-900">NA</h2>
                  <p class="leading-relaxed">Recovered</p>
                </div>
                <div class="p-4 sm:w-1/4 w-1/2">
                  <h2 id="deceased" class="title-font font-medium sm:text-4xl text-3xl text-gray-900">NA</h2>
                  <p class="leading-relaxed">Deceased</p>
                </div>
              </div>
            </div>
          </section>

</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="public/count.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/coronacount.blade.php ENDPATH**/ ?>