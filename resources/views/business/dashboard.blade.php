<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Business</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <x-app-layout>
            <x-slot name="header">
                <div class="flex justify-between">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Businessess') }}
                    </h2>
                    <h2 class="font-semibold text-xl text-white leading-tight bg-[#22c55e] py-2 px-3 cursor-pointer rounded-md">
                        <a href=" {{ route('business.create') }} ">{{ __('Create Businessess') }}</a>
                    </h2>
                </div>
            </x-slot>
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <table class="w-full text-center">
                                <thead class="border-b-2 border-sky-400 text-slate-700 text-1xl">
                                    <tr>   
                                        <th>name</th>
                                        <th>email</th>
                                        <th>address</th>
                                        <th>created user name</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                {{-- {{dd($businesses)}} --}}
                                <tbody>
                           @forelse ($businesses as $business)                  
                                    <tr>
                                        <td class="py-5"> {{ $business->name }} </td>
                                        <td class="py-5"> {{ $business->email }}</td>
                                        <td class="py-5"> {{ $business->address }}</td>
                                        <td class="py-5"> {{ $business->user->name }}</td>
                                        <td colspan="2">
                                            <div class="flex justify-center gap-3">
                                                <a href=" {{ route('business.show', $business->id) }} "><i class="fa-solid fa-eye text-blue-500 text-2xl"></i></a>
                                                <a href=" {{ route('business.edit', $business->id) }} "><i class="fa-solid fa-pen-to-square text-green-500 text-2xl"></i></a>
                                                <form method="POST" action=" {{ route('business.delete', $business->id) }} " class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="form-group">
                                                        <button type="submit"><i class="fa-solid fa-trash  text-red-500 text-2xl"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                         </td>
                                    </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-5 text-3xl text-sky-600">No Record Found</td>
                            </tr>
                            @endforelse
                                </tbody>    
                            </table>

                            <div>
                                {{ $businesses->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>
