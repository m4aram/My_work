{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
    href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
    rel="stylesheet"  type='text/css'> --}}
    {{-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js']);
</head>

<body class="antialiased" dir="rtl" style="background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));
">
    {{-- <div
        class="  min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> --}}


    <div class="h-full  bg-gray-100 flex items-start " >
        <div class="w-72 shadow-md  md:block hidden" style="margin-left:20%; margin-top: 5% ;padding-right: 2%; padding-left: 5%">
            <div class="flex items-center justify-center w-full h-32">
                {{-- <JetApplicationMark class="block h-9 w-auto" /> --}}
                <a href="{{ route('index') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>

            <div class="h-[78.6vh] " >
                <div class="w-full text-sm h-auto rounded-b-lg text-center px-auto ">

                    <a href="{{ route('dashboard') }}"
                        class="
                        {{ Request::path() ==  'dashboard' ?
                        'bg-gray-800 text-white rounded-md text-xl px-7 py-3
                        my-2 flex justify-start items-center' :
                        'text-xl px-7 py-3 my-2 flex justify-start items-center'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="mx-2 text-2xl">Dashboard</span>
                    </a>

                    {{-- <a href="{{ route('products.index') }}"
                        class="{{ str_contains(Route::currentRouteName(), 'products') ?
                        'bg-gray-800 text-white rounded-md text-xl px-7 py-3
                        my-2 flex justify-start items-center' :
                        'text-xl px-7 py-3 my-2 flex justify-start items-center'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="mx-2 text-2xl">products</span>
                    </a> --}}

                    {{-- <a href="{{ route('index') }}"
                        class="
                        {{ str_contains(Route::currentRouteName(), 'categories')?
                        'bg-gray-800 text-white rounded-md text-xl px-7 py-3
                        my-2 flex justify-start items-center' :
                        'text-xl px-7 py-3 my-2 flex justify-start items-center'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                        <span class="mx-2 text-2xl">categories </span>
                    </a> --}}
                </div>

            </div>
        </div>

        <!-- Page Content -->
        <main class=" h-full w-full">
            @include('layouts.navigation')

            <div class="py-4 flex justify-center" >
                <div class="sm:max-w-7xl w-full mx-auto sm:px-6 lg:px-8 ">
                    @if (isset($header))
                        <header class=" ">
                            <div class=" py-2 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>

                        </header>
                    @endif


                    <div class="relative lg:w-[75vw] md:w-[68vw] h-[80vh] shadow-xl  sm:rounded-lg overflow-auto ">
                        {{-- <div class="absolute w-full h-full top-0 right-0 left-0 flex items-center justify-center">
                        </div> --}}
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
    {{ $scripts ?? '' }}
</body>

</html>
