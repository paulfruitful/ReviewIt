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
            <a class="px-3 py-3 bg-green-600 text-white font-bold rounded hover:bg-green-800" href="/">Review It</a>
        </div>
        <div class="mt-2">
            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{$product->title}}</a>
            <p class="mt-12 text-gray-600">{!!$product->description!!}</p>
        </div>
        <div class="flex justify-between items-center mt-4">
            <a class="text-blue-600 hover:underline" href="/product/{{$product->id}}/upvote">Upvote</a>
            <a class="text-blue-600 hover:underline" href="/product/{{$product->id}}/downvote">Downvote</a>
            <div>
                <a class="flex items-center" href="#">
                    <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" >
                    <h1 class="text-gray-700 font-bold">{{$product->author}}</h1>
                </a>
            </div>
        </div>
    </div>

</html>