<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Business</title>

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
                            <form action=" {{ route('business.update',$business->id) }} " method="POST" class="w-[50%] mx-auto">
                                @csrf
                                <h1 class="text-center text-2xl text-pink-400 font-bold">Edit Business</h1>
                                <div class="flex flex-col gap-3 ">
                                    <label for="" class="text-slate-700 text-xl">name</label>
                                    <input type="text" name="name" class="rounded-md border-sky-200 border-2" value=" {{ $business->name }} ">
                                </div>
                                <span class="text-red-500 font-semibold">@error('name') {{ $message }} @enderror</span>
                                <div class="flex flex-col gap-3 ">
                                    <label for="" class="text-slate-700 text-xl">address</label>
                                    <input type="text" name="address" class="rounded-md border-sky-200 border-2" value=" {{ $business->address }} ">
                                </div>
                                <span class="text-red-500 font-semibold">@error('address') {{ $message }} @enderror</span>
                                <div class="flex flex-col gap-3 ">
                                    <label for="" class="text-slate-700 text-xl">email</label>
                                    <input type="text" name="email" class="rounded-md border-sky-200 border-2" value=" {{ $business->email }} ">
                                </div>
                                <span class="text-red-500 font-semibold">@error('email') {{ $message }} @enderror</span>
                                <div>
                                    <button type="submit" class="mt-5 bg-[#4d7c0f] text-white py-2 px-4 font-bold rounded-md">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
