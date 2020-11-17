

<?php $__env->startSection('content'); ?>

    
<div class="form_div">
   
        <form class="register">
         <?php echo e(csrf_field()); ?>

            <div class="content-around" > 
                <div >
                    <h2 class="text-3x text-center sm:text-3xl text-2xl font-medium title-font m-2">REGISTERATION FORM</h2>
                    <hr class="mt-2">
                </div>
                <div >
                    <h2 class="text-3x text-center sm:text-3xl text-2xl font-medium title-font m-2 bg-gray-300">HOSPITAL DETAILS</h2>
                </div>              
                
                <div class="my-2">
                    <input id="Hospital" name="c_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Hospital" type="text">
                    <p class="popup">Only word is Excepted (lenght 2 to 30)</p>
                  </div>
                  <div>
                    <input id="State" name="c_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2  mb-4 sm:mb-0" placeholder="State"  type="text">
                    <p class="popup">Only words excepted</p>
                  </div>
                  
                  <div>
                    <input id="City" name="nc_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4  mt-2 sm:mb-0" placeholder="City" type="text">
                    <p class="popup">Only words excepted</p>
                  </div>
                  <div>
                    <input id="Address" name="nc_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 mt-2 sm:mb-0" placeholder="Address"  type="text">
                    <p class="popup">Only words and numbers are excepted</p>
                  </div>
                  
                  <div>
                    <input id="Phone" name="nc_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 mt-2 sm:mb-0" placeholder="Phone"  type="text">
                    <p class="popup">It should be 10 digit number</p>
                  </div>
                  <div>
                    <input id="Landline" name="nc_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4  mt-2 sm:mb-0" placeholder="Landline" type="text">
                    <p class="popup">It should be 11 digit number</p>
                  </div>
                  <div>
                    <input id="latitude" name="latitude" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4  mt-2 sm:mb-0" placeholder="Latitude" type="text">
                    <p class="popup">It should be decimal number</p>
                  </div>
                  <div>
                    <input id="longitude" name="longitude" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4  mt-2 sm:mb-0" placeholder="Longitude" type="text">
                    <p class="popup">It should be decimal number</p>
                  </div>
                <hr class="mt-4">
                <div>
                    <h2 class="text-3x text-center sm:text-3xl text-2xl font-medium title-font m-2 bg-gray-300">CONTACT DETAILS</h2>
                </div>

                <div class="my-2">
                  <input id="First_name" name="c_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="First_name" type="text">
                  <p class="popup">Only Word Is Excepted</p>
                </div>
          
                <div>
                  <input id="Password" name="nc_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 mt-2 sm:mb-0" placeholder="Password"  type="text">
                  <p class="popup">The password Should contain Alphabets, Numbers, and Alphanumeric Character (Leanght > 6)</p>
                </div>
                <div >
                  <input id="Email" name="nc_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2  mb-4  mt-2 sm:mb-0" placeholder="Email" type="email">
                  <p class="popup">Valid Email have @ and " . "</p>
                </div>
                <div >
                    <h2 class="text-3x text-center sm:text-3xl text-2xl font-medium title-font m-2 bg-gray-300">BED INFORMATION</h2>
                </div>
                <div class="my-2">
                  <input id="c_o" name="c_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Normal Bed(Occupied)" min="1" max="5000" type="number">
                  <p class="popup">Input should be a number</p>
                </div>
                <div>
                  <input id="c_uo" name="c_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4 sm:mb-0" placeholder="Normal Bed(Remaining)" min="1" max="5000" type="number">
                  <p class="popup">Input should be a number</p>
                </div>
                <div>
                  <input id="nc_o" name="nc_o" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 mt-2 sm:mb-0" placeholder="Normal Bed(Occupied)" min="1" max="5000" type="number">
                  <p class="popup">Input should be a number</p>
                </div>
                <div >
                  <input id="nc_uo" name="nc_uo" class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2  mb-4  mt-2 sm:mb-0" placeholder="Normal Bed(Remaining)" min="1" max="5000" type="number">
                  <p class="popup">Input should be a number</p>
                </div>
                <div class="p-2 w-full">
                    <button id="submit"  class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10"  >Submit</button>
                  </div>

            </div>
        </form>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript" src="public/register.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/register.blade.php ENDPATH**/ ?>