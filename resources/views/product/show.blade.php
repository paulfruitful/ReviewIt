<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$product->title}}</title>
</head>

    <div class="max-w-full h-full px-10 my-4 py-6 bg-white rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <span class="font-light text-gray-600">{{$product->created_at->format('jS F Y h:i:s A')}}</span>
            <a class="px-3 py-3 bg-green-600 text-white font-bold rounded hover:bg-green-800" href="/">ReviewIt</a>
        </div>
        <div class="mt-2">
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{$product->title}}</a>
            <p class="mt-12 text-gray-600">{!!$product->description!!}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            @if (session()->has('click'))
                
            <a class="text-blue-600 hover:underline" href=""> </a>
            
            <a class="text-blue-600 hover:underline" href=""></a>
            @else
            <a class="text-blue-600 hover:underline" href="/product/{{$product->id}}/upvote">Upvote</a>
            <a class="text-blue-600 hover:underline" href="/product/{{$product->id}}/downvote">Downvote</a>
            @endif
            <div>
                <a class="flex items-center" href="#">
                    <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" >
                    <h1 class="text-gray-700 font-bold">{{$product->author}}</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-center relative top-1/3">




        <!-- This is an example component -->
  
        
        </div>
        @if (auth()->id()==$product->user_id)
  <p class="text-center text-4xl font-bold my-8 text-gray-700">Feedbacks <span class="bg-green-600 rounded-full shadow-xl py-3 px-3 text-white">{{count($product->feedback)}}</span></p>
     
 @if(count($product->feedback)>0)
                      @foreach ($product->feedback as $feedback)   
                      <div class="flex justify-center relative my-12 top-1/3">


            <div class="relative w-full  grid grid-cols-1 gap-4 p-4  border rounded-lg bg-white shadow-lg">
                <div class="relative flex gap-4">
                    <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
                    <div class="flex flex-col w-full">

                     
                          <div class="flex flex-row justify-between">
                            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">{{$feedback->name}}</p>
                            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                      
                        
                    
                        <p class="text-gray-400 text-sm">{{$feedback->created_at->format('jS F Y h:i:s A')}}</p>
                    </div>
                </div>
                <p class="-mt-4 text-gray-500">{{$feedback->feedback}}</p>
            </div>
               
            
            
            </div>  @endforeach
                        @else
                        @endif
            @else
       
      <!--  <p class="text-center text-4xl font-bold my-8 text-gray-700">Feedbacks <span class="bg-green-600 rounded-full shadow-xl py-3 px-3 text-white">{{count($product->feedback)}}</span></p>
        <div class="flex justify-center relative my-12 top-1/3">




            <!-- This is an example component 
            <div class="relative w-full  grid grid-cols-1 gap-4 p-4  border rounded-lg bg-white shadow-lg">
                <div class="relative flex gap-4">
                    <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">COMMENTOR</p>
                            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
                    </div>
                </div>
                <p class="-mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Maxime quisquam vero adipisci beatae voluptas dolor ame.</p>
            </div>
            
            
            
            </div> --> @endif
            
        @if (auth()->id()==$product->user_id)
        
        @else
<p class="text-center text-4xl font-bold my-8 text-gray-700">Drop A Feedback</p>
<!-- comment form -->
<div class="flex mx-auto items-center justify-center shadow-lg mt-8 w-full mb-4 ">
    <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2" action="/product/{{$product->id}}/create/feedback" method="POST">
      @csrf
       <div class="flex flex-wrap -mx-3 mb-6">
        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Name</h2>
        <div class="w-full md:w-full px-3 mb-2 mt-2">
           <input class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full  py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="name" placeholder='Type Your Name' required>
        </div>
        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Title</h2>
        <div class="w-full md:w-full px-3 mb-2 mt-2">
           <input class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full  py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="title" placeholder='Type Your Subject' required>
        </div>
          <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new feedback</h2>
          <div class="w-full md:w-full px-3 mb-2 mt-2">
             <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="feedback" placeholder='Type Feedback' required></textarea>
          </div>
          <div class="w-full md:w-full flex items-start md:w-full px-3">
             <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
             </div>
             <div class="-mr-1">
                <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>
             </div>
          </div>
       </form>
    </div>
 </div>
 @endif
 <!--
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->

    <!--<div class="mx-auto w-full max-w-[550px]">
      <form action="/create/feedback" method="POST">
        @csrf
        <div class="mb-5">
          <label
            for="name"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Full Name
          </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
     
        <div class="mb-5">
          <label
            for="subject"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Subject
          </label>
          <input
            type="text"
            name="title"
            id="subject"
            placeholder="Enter your subject"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            for="message"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Message
          </label>
          <textarea
            rows="4"
            name="feedback"
            
            placeholder="Type your feedback"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></textarea>
        </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-green-600 py-3 px-8 text-base font-semibold text-white outline-none"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>-->
  <!--
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  <script>
      CKEDITOR.replace( 'feedback' );
  </script>-->
</html>