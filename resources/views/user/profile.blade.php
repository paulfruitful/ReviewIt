<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="h-screen w-screen flex overflow">
	
	<main
		class="flex-1 flex flex-col bg-gray-100 dark:bg-gray-700 transition
		duration-500 ease-in-out overflow-y-auto">
		<div class="mx-10 my-2" id="product">
			<nav
				class="flex flex-row justify-between border-b
				dark:border-gray-600 dark:text-gray-400 transition duration-500
				ease-in-out">
				<div class="flex">
					<!-- Top NavBar -->

					<a
						href="users-dashboard/"
						class="py-2 block text-green-500 border-green-500
						dark:text-green-200 dark:border-green-200
						focus:outline-none border-b-2 font-medium capitalize
						transition duration-500 ease-in-out" href="/user/{{auth()->id()}}/">
						home
					</a>
					
				<a
						class="ml-6 py-2 block border-b-2 border-transparent
						focus:outline-none font-medium capitalize text-center
						focus:text-green-500 focus:border-green-500
						dark-focus:text-green-200 dark-focus:border-green-200
						transition duration-500 ease-in-out" href="/user/{{auth()->id()}}/settings">
						profile
				</a>
				<div class="ml-6 py-2 px-3 block border-b-2 border-transparent
				focus:outline-none font-medium transition duration-500 ease-in-out capitalize text-center text-red-700 dark:text-red-400">
					<!-- important action -->
					<a href="/logout" class="flex items-center">
						<svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
							<path
								d="M16 17v-3H9v-4h7V7l5 5-5 5M14 2a2 2 0 012
								2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2
								0 012-2h9z"></path>
						</svg>
						<span class="ml-2 capitalize font-medium">log out</span>
					</a>
		
				</div>
				</div>

				<div class="flex items-center select-none">
					<span
						class="hover:text-green-500 dark-hover:text-green-300
						cursor-pointer mr-3 transition duration-500 ease-in-out">

						<svg viewBox="0 0 512 512" class="h-5 w-5 fill-current">
							<path
								d="M505 442.7L405.3
								343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
								44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1
								208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4
								2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
								0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
								0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0
								128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
						</svg>
					</span>

					<input
						class="w-12 bg-transparent focus:outline-none"
						placeholder="Search" />

				</div>

			</nav>
			<h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
				Product list
			</h2>
			<div
				class="pb-2 flex items-center justify-between text-gray-600
				dark:text-gray-400 border-b dark:border-gray-600">
				<!-- Header -->

				<div>
					<span class="px-6">
						<span class="text-green-500 dark:text-green-200">
							@if (count(auth()->user()->product)>0)
							{{count(auth()->user()->product)}}
							@else
								0
							@endif
						</span>
						Products
					</span>
					<span class="px-6">
						<span class="text-green-500 dark:text-green-200">
							@if (count(auth()->user()->feedback)>0)
							{{count(auth()->user()->feedback)}}
							@else
								0
							@endif
						</span>
						Feedbacks
					</span>
					
				</div>
				
				<div class="">
					<span class="capitalize px-3">
						products
						<span
							class="text-green-500 dark:text-green-200
							cursor-pointer">
						<a href="#product">	all</a>
						</span>
					</span>
					<span class="capitalize ml-4">
						feedbacks
						<span
							class="text-green-500 dark:text-green-200
							cursor-pointer">
						<a href="#feedback">	all</a>
						</span>
					</span>

				</div>

			</div>
			<a
			class="mt-8 flex items-center justify-between py-3 px-2 text-white
			dark:text-gray-200 bg-green-600 dark:bg-green-500 hover:bg-green-800 rounded-lg shadow" href="/product/create">
			<!-- Action -->
			<span>Add Product</span>
			<svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
				<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
			</svg>
		</a>
			
	
			
			@forelse (auth()->user()->product as $product)
			<a href="/product/{{$product->id}}">
			<div
				class="mt-8 mb-4 flex px-4 py-4 justify-between items-center bg-white
				dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer w-screen " style="margin-left:-39px; width:100vw;">
				<!-- Card -->

				<div class="flex ">
					<!-- Left side -->

					<div
						class="ml-4 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
						<span>name</span>
						<span class="mt-2 text-black dark:text-gray-200">
							{{$product->title}}
						</span>
					</div>

				

				</div>

				<div class="flex">
					<!-- Rigt side -->

					

				

					<div
						class="mr-8 flex flex-col capitalize text-gray-600
						dark:text-gray-400">
						<span>Created At</span>
						<span class="mt-2 text-green-400 dark:text-green-200">
							{{$product->created_at->format('d-F-Y')}}
						</span>
					</div>

				</div>

			</div>
</a>
			@empty
				<div class="text-center font-bold mt-12 text-gray-400 text-xl">
					--- No Product Reviews Found---
				</div>
			@endforelse
			
		</div>
		<div class="mx-10 my-2" id="feedback">
		<h2 class="my-4 text-4xl font-semibold dark:text-gray-400">
			Feedback list
		</h2>
		<div
			class="pb-2 flex items-center justify-between text-gray-600
			dark:text-gray-400 border-b dark:border-gray-600">
			<!-- Header -->

			<div>
				<span class="px-6">
					<span class="text-green-500 dark:text-green-200">
						@if (count(auth()->user()->product)>0)
						{{count(auth()->user()->product)}}
						@else
							0
						@endif
					</span>
					Products
				</span>
				<span class="px-6">
					<span class="text-green-500 dark:text-green-200">
						@if (count(auth()->user()->feedback)>0)
						{{count(auth()->user()->feedback)}}
						@else
							0
						@endif
					</span>
					Feedbacks
				</span>
				
			</div>
			
			<div class="">
				<span class="capitalize px-3">
					products
					<span
						class="text-green-500 dark:text-green-200
						cursor-pointer">
					<a href="#product">	all </a>
					</span>
				</span>
				<span class="capitalize ml-4">
					feedbacks
					<span
						class="text-green-500 dark:text-green-200
						cursor-pointer">
					<a href="#feedback">	all</a>
					</span>
				</span>

			</div>

		</div>
	
		
		<a
		class="mt-8 flex items-center justify-between py-3 px-2 text-white
		dark:text-gray-200 bg-green-600 dark:bg-green-500 hover:bg-green-800 rounded-lg shadow" href="/product/create">
		<!-- Action -->
		<span>Add Product</span>
		<svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
			<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
		</svg>
	</a>
		
		@forelse (auth()->user()->feedback as $product)
		<a href="/product/{{$product->id}}">
		<div
			class="mt-8 mb-4 flex px-4 py-4 justify-between items-center bg-white
			dark:bg-gray-600 shadow-xl rounded-lg cursor-pointer w-screen " style="margin-left:-39px; width:100vw;">
			<!-- Card -->

			<div class="flex ">
				<!-- Left side -->

				<div
					class="ml-4 flex flex-col capitalize text-gray-600
					dark:text-gray-400">
					<span>Title</span>
					<span class="mt-2 text-black dark:text-gray-200">
						{{$product->title}}
					</span>
				</div>

			

			</div>

			<div class="flex">
				<!-- Rigt side -->

				

			


				<div
					class="mr-8 flex flex-col capitalize text-gray-600
					dark:text-gray-400">
					<span>Created At</span>
					<span class="mt-2 text-green-400 dark:text-green-200">
						{{$product->created_at->format('d-F-Y')}}
					</span>
				</div>

			</div>

		</div>
</a>
		@empty
			<div class="text-center font-bold mt-12 text-gray-400 text-xl">
				--- No Feedbacks Received---
			</div>
		@endforelse
		
	</div>
	</main>

</div>