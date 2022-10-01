@extends('layouts.layout')
@section('content')
    {{-- sort by and result --}}
    <div class="w-full flex justify-between py-2 px-4 sm:text-base text-sm sm:px-8 sm:flex-row flex-col">
        <div class="">Showing 1-8 out of n</div>
        <div class="flex items-center">
            <h1>Sort By:</h1>
            <select id="" class="border-2 px-3 mx-2">
                <option value="recommend">Recommend</option>
                <option value="popular">Popular</option>
                <option value="newest">Newest</option>
            </select>
        </div>
    </div>
    <div class="w-full flex">
        @include('layouts.sidefilter')
        <div class="w-4/5 grid lg:grid-cols-4 gap-4 p-4 md:grid-cols-3 sm:grid-cols-2">
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/laptop/1">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <a href="#" class="flex list-none pl-4 items-center mt-1">
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <span class="text-sm pl-2 text-green-700">10 reviews</span>
                            </a>
                            <span class="text-center mt-1 text-xl pl-4 text-red-500">$<span
                                    class="text-black">999</span></span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100 rounded hover:scale-95 transition-all duration-200">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-full ">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1611078489935-0cb964de46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                            alt="" class="rounded lg:h-96 h-40 object-cover w-full ">
                        <div class="flex flex-col justify-between items-start">
                            <h1 class="text-center mt-4 text-md pl-4">Asus Gaming Laptop</h1>
                            <span class="text-center mt-2 text-md pl-4 text-red-500">20%</span>
                        </div>
                    </a>

                </div>

            </div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
            <div class="bg-stone-100"></div>
        </div>
    </div>
@endsection
