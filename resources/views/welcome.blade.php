<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<!-- Container for demo purpose -->
<div>

   <!-- Container for demo purpose -->
<div>

    <!-- Section: Design Block -->
    <section class="mb-40">
      <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
        <div class="px-6 w-full flex flex-wrap items-center justify-between">
          <div class="flex items-center">
     
            <a class="navbar-brand text-black text-3xl font-bold" href="#!">
             Review<span class="text-3xl text-green-600 ">It</span>
            </a>
          </div>
          
          <div class="flex items-center items-center lg:ml-auto   ">
            <a class="inline-block px-6 py-2.5 mr-2 bg-transparent text-green-600 font-medium text-xs leading-tight uppercase rounded hover:text-green-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" href="/login">Login</a>
            <a class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" href="/register">Sign up for free</a>
          </div>
        </div>
      </nav>
  
      <div class="px-6 py-12 md:px-12 bg-gray-100 text-gray-800 text-center lg:text-left">
        <div class="container mx-auto xl:px-32">
          <div class="grid lg:grid-cols-2 gap-12 flex items-center">
            <div class="mt-12 lg:mt-0">
              <h1 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12">Getting customer reviews <br /><span class="text-green-600">on your products</span></h1>
              <p class="text-gray-600">
                Boost Your Relationship With Your Customers.<br>
                Getting opinions from your customers provides an avenue for you to improve your products. <br>
                Do you want a good relationship with your customers?
                If yes sign up now and start reviewing your products, do not forget a happy customer equates a happy business
              </p>
            </div>
            <div class="mb-12 lg:mb-0">
              <div class="block rounded-lg shadow-lg bg-white px-6 py-12 md:px-12">
                <h1 class="text-center font-bold text-4xl mb-12">Sign <span class="text-green-600">Up</span></h1>
                @if ($errors)
                <ul class="mb-6">
                    @foreach ($errors->all() as $message)
                        <li class="text-red-700 mb-3">{{$message}}</li>
                    @endforeach
                </ul>
                @endif
                <form action="/register" method="POST">
                    @csrf
                  
                    <div class="mb-6">
                      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Full name" name="name"/>
                    </div>
                    
                  
                  <input type="email" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" name="email"/>
                  <input type="password" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password" name="password"/>
                  
                  <input type="password" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Confirm Password" name="password_confirmation"/>
                  <div class="form-check flex justify-center mb-6">
                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                      Subscribe to our newsletter
                    </label>
                  </div>
                  <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 mb-6 w-full bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Sign up</button>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
  </div>
  <!-- Container for demo purpose -->
 <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center">
      <div class="grid gap-x-6 lg:gap-x-12 md:grid-cols-3">
        <div class="mb-12 md:mb-0">
          <h2 class="text-3xl font-bold display-5 text-blue-600 mb-4">1000</h2>
          <h5 class="text-lg font-medium mb-4">Happy customers</h5>
          <p class="text-gray-500">
            Laudantium totam quas cumque pariatur at doloremque hic quos quia eius
          </p>
        </div>
  
        <div class="mb-12 md:mb-0">
          <h2 class="text-3xl font-bold display-5 text-blue-600 mb-4">70%</h2>
          <h5 class="text-lg font-medium mb-4">Growth</h5>
          <p class="text-gray-500">
            Eum nostrum fugit numquam, voluptates veniam neque quibusdam ullam
          </p>
        </div>
  
        <div class="mb-12 md:mb-0">
          <h2 class="text-3xl font-bold display-5 text-blue-600 mb-4">49</h2>
          <h5 class="text-lg font-medium mb-4">Projects</h5>
          <p class="text-gray-500">
            Enim cupiditate, minus nulla dolor cumque iure eveniet facere ullam potistas
          </p>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
  <!-- Container for demo purpose -->
</body>
</html>