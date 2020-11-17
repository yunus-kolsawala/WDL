


<!-- component -->
<div class="antialiased sans-serif bg-gray-200 h-screen mt-8">
	
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<div class="container mx-auto py-6 px-4" >
		<h1 class="text-3xl py-4 border-b mb-10">Datatable</h1>

<!-- search and namefilter -->
		<div class="mb-4 flex justify-between items-center">

        <!-- search -->
			<div class="flex-1 pr-4">
				<div class="relative md:w-1/3">
					<input type="search" id="search"
						class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
						placeholder="Search...">
					<div class="absolute top-0 left-0 inline-flex items-center p-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
							stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<circle cx="10" cy="10" r="7" />
							<line x1="21" y1="21" x2="15" y2="15" />
						</svg>
					</div>
				</div>
			</div>
		</div>

		<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
			style="height: 405px;">
			<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
				<thead>
					<tr class="text-left">
					<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Edit							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Id							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Hospital Name							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Address							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								City							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Phone							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Landline							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Contact Person							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Email							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Latitude							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Longitude							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Corona_Occ							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Corona_Unocc							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Normal_Occ							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Normal_Unocc							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Created At							</label>
						</th>
						<th class="py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
							<label
								class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">
								Updated At							</label>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer"><a href="<?php echo e(url('/adminupdate/1')); ?>">Edit</a></label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 userId"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">123</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
					<td class="border-dashed border-t border-gray-200 px-3"><label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded-lg cursor-pointer">qwerty</label></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript" src="public/table.js"></script>
</div>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cot2\resources\views/admintable.blade.php ENDPATH**/ ?>