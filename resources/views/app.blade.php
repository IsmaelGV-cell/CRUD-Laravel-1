<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"> <title>@yield('title')</title>

<script src="https://cdn.tailwindcss.com"></script> </head>

    <body>
    <div class="bg-gray-200 py-16">
        <div class="container px-4 mx-auto">
            <h2 class="text-6xl mb-4 flex items-center">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">

                    <path
                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"
                        stroke-linecap="round" stroke-linejoin="round"></path></svg>
                @yield('title')
            </h2>
            <p class="text-lg font-light leading-loose mx-w-3xl">@yield('description')</p>



        </div>



    </div >
        <div class="container px-4 mx-auto py-16">
            @yield('content')
        </div>
</body >

</html >