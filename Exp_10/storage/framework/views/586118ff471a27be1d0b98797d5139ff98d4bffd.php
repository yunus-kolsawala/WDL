

<?php $__env->startSection('content'); ?>

  <!--HERO Section-->

  <section  class="text-gray-700 body-font bg-gray-200 mt-16">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl font-bold text-red-600 ">Find By Current Location </h1>
                <div class="flex justify-center">
                    <button onclick="getHosInfo()"
                        class=" mt-2 inline-flex text-white bg-indigo-800 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Find
                        Bed
                    </button>
                </div>

                <h1 class="title-font sm:text-4xl text-3xl font-bold text-red-600 mt-8">Find By City name</h1>
                <input id="districtName"
                    class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0 mt-2"
                    placeholder="City" type="email">
                <button onclick="findByDistrict()"
                    class="mt-2 inline-flex text-white bg-indigo-800 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="public/images/Asset 5@4x.png">
            </div>
        </div>


        <!--List fo hospitals-->
        <div class="hos_list">
<section class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div  id="pasteTheResult" class="-my-8">
        
          <!--One list ends-->
      </div>
    </div>
  </section>
</div>


    </section>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="public/hospitalAroundYou.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/hospitalinfo.blade.php ENDPATH**/ ?>