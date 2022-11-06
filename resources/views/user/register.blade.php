<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<section class="h-screen">
   <div class="container px-6 py-12 h-full">
     <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
    
       <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
      <h1 class="text-center text-4xl font-bold mb-12">Login <span class="text-green-700">Now</span></h1>
         <form action="/register" method="POST">
            @csrf
            @if ($errors)
            <ul class="m-2">
                @foreach ($errors->all() as $message)
                    <li class="text-red-700 text-md font-bold">{{$message}}</li>
                @endforeach
               </ul>
            @endif
           <!-- Email input -->
           <div class="mb-6">
             <input
               type="text"
               class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
               name="email"
               placeholder="Email address"
             />
           </div>
 
           <!-- Password input -->
           <div class="mb-6">
             <input
               type="password"
               class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
               name="password"
               placeholder="Password"
             />
           </div>
 
           <div class="flex justify-between items-center mb-6">
             <div class="form-group form-check">
               <input
                 type="checkbox"
                 class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                 id="exampleCheck3"
                 checked
               />
               <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                 >Remember me</label
               >
             </div>
            
            
           </div>
 
           <!-- Submit button -->
           <button
             type="submit"
             class="inline-block px-7 py-3 bg-green-800 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
             data-mdb-ripple="true"
             data-mdb-ripple-color="light"
           >
             Sign in
           </button>
 
          
 
       
          
         </form>
       </div>
     </div>
   </div>
 </section>