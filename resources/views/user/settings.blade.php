<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    :root {
        --main-color: #06cc0f;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<nav class="navbar navbar-expand-lg shadow-md py-5 bg-white relative flex items-center w-full justify-between">
    <div class="px-6 w-full flex flex-wrap items-center justify-between">
      <div class="flex items-center">
 
        <a class="navbar-brand text-black text-3xl font-bold" href="#!">
         Review<span class="text-3xl text-green-600 ">It</span>
        </a>
      </div>
      <div class="flex items-center items-center lg:ml-auto   ">
       <a class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="/user/{{auth()->id()}}/">Back</a>
      </div>
    
    </div>
  </nav>


<div class="bg-gray-100">
 <div class="w-full text-white bg-main-color">
      
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
            <!-- Left Side -->
         
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">Profile</span>
                    </div>
                    <form action="/user/{{auth()->id()}}/update" method="post">
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Full Name</div>
                                <div class="px-4 py-2"><input type="text" name="name" class="py-4" value="{{auth()->user()->name}}"></div>
                            @error('name')
                            <p class="text-red-700 font-semibold text-md">{{$message}}</p>   
                           @enderror </div>
                           
                            @csrf
                          @method('PUT')
                            
                          
                          
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email</div>
                                <div class="px-4 py-2">
                                    <input type="text" name="email" class="form-control block py-4 rounded transition ease-in-out m-0" value="{{auth()->user()->email}}">
                             @error('email')
                             <p class="text-red-700 font-semibold text-md">{{$message}}</p>   
                            @enderror     </div>
                            </div>
                          
                           
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Password</div>
                                <div class="px-4 py-2">
                                    <input type="password" class="py-4" name="password" placeholder="New Password">
                                @error('password')
                            <p class="text-red-700 font-semibold text-md">{{$message}}</p>   
                           @enderror
 </div>
                            </div>
                           
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Confirm Password</div>
                                <div class="px-4 py-2">
                                    <input type="password" class="py-4"name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="block w-full text-white bg-green-600 text-sm font-semibold rounded-lg hover:bg-green-600 focus:outline-none focus:shadow-outline focus:bg-green-600 hover:shadow-xs p-3 my-4" type="submit">Update Profile</button>
                </div>
                
                <!-- End of about section -->
</form>
                <div class="my-4"></div>

                <!-- End of profile tab -->
            
     
    </div>
</div>