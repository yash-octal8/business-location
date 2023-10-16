<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Business create</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                      <a href=" {{ route('location.index') }} " class="bg-[#0ea5e9] text-white py-2 px-2 rounded-md"> <span class="text-white"><<</span> Back </a>
                    </h2>
            </x-slot>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <form action=" {{ route('location.update',$locations->id) }} " method="post" class="w-[50%] mx-auto">
                                <h1 class="text-center text-2xl text-pink-400 font-bold">Edit Location</h1>
                                @csrf
                                <div class="flex flex-col gap-3 ">
                                    <label for="" class="text-slate-700 text-xl">name</label>
                                    <input type="text" name="name" class="rounded-md border-sky-200 border-2" value="{{$locations->name}}" >
                                </div>
                                <span class="text-red-500 font-semibold">@error('name') {{ $message }} @enderror</span>
                                <div class="flex flex-col gap-3 my-3">
                                    <label for="" class="text-slate-700 text-xl">business</label>
                                    <select value="" name="business_id" id="" class="rounded-md border-sky-200 border-2">
                                        @foreach ($businesses as $business)
                                        <option value="{{$business->id}}" {{$locations->business->name == $business->name ? 'selected' : '' }}> {{ $business->name }} </option>
                                        @endforeach 
                                    </select>
                                </div>
                                <span class="text-red-500 font-semibold">@error('business_name') {{ $message }} @enderror</span>
                                <div>
                                    <button type="submit" class="mt-5 bg-[#0ea5e9] text-white py-2 px-4 font-bold rounded-md">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
