<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Business</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                      <a href=" {{ route('dashboard') }} " class="bg-[#0ea5e9] text-white py-2 px-2 rounded-md"> <span class="text-white"><<</span> Back </a>
                    </h2>
            </x-slot>
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="w-[50%]  mx-auto bg-pink-50 p-5 rounded-md shadow-md">
                                <h1 class="text-sky-500 text-3xl py-5 font-bold border-b-2">business</h1>
                                    <div class="flex justify-between py-4 border-b-2">
                                        <span class="text-xl text-slate-700"> name :</span>
                                        <span> {{ $business->name }} </span>
                                    </div>
                                    <div class=" flex justify-between py-4 border-b-2">
                                        <span class="text-xl text-slate-700"> email :</span>
                                        <span> {{ $business->email }} </span>
                                    </div>
                                    <div class=" flex justify-between py-4 border-b-2">
                                        <span class="text-xl text-slate-700"> address :</span>
                                        <span> {{ $business->address }} </span>
                                    </div>
                                    <div class=" flex justify-between py-4 border-b-2">
                                        <span class="text-xl text-slate-700">created user name :</span>
                                        <span> {{ $business->user->name }} </span>
                                    </div>
                                    <div class=" flex justify-between">
                                        <span class="text-xl text-slate-700"> location:</span>
                                        <span> {{ $locations }} </span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
