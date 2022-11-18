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
                Getting opinions from your customers helps you improve your business. 
                Do you want a good relationship with your customers? if yes sign up now.
                
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
          <h2 class="text-3xl font-bold display-5 text-green-600 mb-4">100%</h2>
          <h5 class="text-lg font-medium mb-4">Happy customers</h5>
          <p class="text-gray-500">
            Build A Better Relationship With Your Customers.
          </p>
        </div>
  
        <div class="mb-12 md:mb-0">
          <h2 class="text-3xl font-bold display-5 text-green-600 mb-4">100%</h2>
          <h5 class="text-lg font-medium mb-4">Growth</h5>
          <p class="text-gray-500">
            Gaining A Better Reputation Increases Growth
          </p>
        </div>
  
        <div class="mb-12 md:mb-0">
          <h2 class="text-3xl font-bold display-5 text-green-600 mb-4">Unlimited </h2>
          <h5 class="text-lg font-medium mb-4">Product Reviews</h5>
          <p class="text-gray-500">
            Get Your Customers Opinions On Your Business Decisions
          </p>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->
  <!-- Container for demo purpose -->
  <!-- Container for demo purpose -->
<div class="container my-24 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800 text-center lg:text-left">
    <style>
      @media (min-width: 992px) {
        .rotate-lg-6 {
          transform: rotate(6deg);
        }
      }
    </style>

    <div class="md:px-6 py-12 md:px-12">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 flex items-center">
          <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
            <div class="relative block rounded-lg shadow-lg px-6 pt-12 pb-6 md:px-12 lg:-mr-14" style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  z-index: 1;
                ">
              <h2 class="text-3xl text-green-600 font-bold mb-6">Why is it so great?</h2>
              <p class="text-gray-500 mb-6">
               Breaking the gap between businesses and customers.
               A platform where customers can help businesses make better decisions when it comes to creating, or updating already existing products.
               Providing maximum satisfaction to both businesses and customers.
              </p>

              <div class="grid md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-x-6">
                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Support 24/7
                  </p>
                </div>

                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Analytics
                  </p>
                </div>

                
                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Updates
                  </p>
                </div>

                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Regular Notifications
                  </p>
                </div>

                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Mobile Friendly
                  </p>
                </div>

                <div class="mb-6">
                  <p class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor"
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                      </path>
                    </svg>Maximum Security
                  </p>
                </div>
               

               

            
              </div>
            </div>
          </div>
          <div class="md:mb-12 lg:mb-0">
            <img src="https://th.bing.com/th/id/OIP.v75TnHplw5SdX8YREI8HaAHaEW?pid=ImgDet&rs=1"
              class="w-full rounded-lg shadow-lg rotate-lg-6" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
<!-- Container for demo purpose -->
<div class="container mt-24 px-6 mx-auto w-full" style="margin-bottom: -100px">

  <!-- Section: Design Block -->
  <section class="mb-32 text-gray-800">

    <div class="relative overflow-hidden bg-no-repeat bg-cover"
      style="background-position: 50%; background-image: url('https://mdbootstrap.com/img/new/textures/full/284.jpg'); height: 300px;">
    </div>
    <div class="container text-gray-800 px-4 md:px-12">
      <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
        style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="flex flex-wrap">
         
          
          <div class="grow-0 shrink-0 basis-auto w-full xl:w-7/12">
            <div class="flex flex-wrap">
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Technical support</p>
                    <p class="text-gray-500">techtasktechnologies@gmail.com</p>
                    <p class="text-gray-500">+234 811-4483-062</p>
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                        class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                        <path fill="currentColor"
                          d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Enquiries</p>
                    <p class="text-gray-500">techtasktechnologies@gmail.com</p>
                    <p class="text-gray-500">+234 906-6524-815</p>
                  </div>
                </div>
              </div>
              <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                        class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                          d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Press</p>
                    <p class="text-gray-500">press@example.com</p>
                    <p class="text-gray-500">+1 234-567-89</p>
                  </div>
                </div>
              </div>
              <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Bug report</p>
                    <p class="text-gray-500">bugs@example.com</p>
                    <p class="text-gray-500">+1 234-567-89</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
</body>
</html>