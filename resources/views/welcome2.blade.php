<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer-Ecommerce</title>

    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">


</head>

<body>
    @include('layouts.navbar')
    {{-- Slideshow --}}
    <div class="w-full relative">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80"
            alt="bg.png" class="w-full h-96 object-cover">
        <div class="absolute top-20 text-black xs:translate-x-5 xs:font-thin xs:left-8 md:left-36 xl:left-80">
            <h1 class="uppercase text-red-500 font-extralight tracking-thin">Summer Sale</h1>
            <h1 class="text-4xl uppercase font-bold">Get up to </h1>
            <h1 class="text-7xl uppercase font-extrabold">15%</h1><br>
            <a href="products">
                <button class="px-8 py-3 bg-black rounded-xl text-white shadow hover:text-red-600">Shop Now</button>
            </a>
        </div>
    </div>
    {{-- Product Section --}}
    <div class="w-full text-center my-12">
        <h1 class="uppercase font-thin text-4xl 
        tracking-tight  mb-16 xs:mb-4">
            Products
        </h1>
        <div class="grid grid-cols-2 gap-4 mx-5 my-8 sm:mx-20 sm:my-12 lg:m-16 lg:px-32">
            <div class="col-start-1 row-span-1">
                <a href=""><img
                        src="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80"
                        alt="" class="rounded h-full"></a>
            </div>
            <div class="grid col-start-2 grid-cols-2 gap-4">
                <div class="col-span-2">
                    <a href=""><img
                            src="https://images.unsplash.com/photo-1589578228447-e1a4e481c6c8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80"
                            alt="" class="rounded"></a>
                </div>
                <div class="">
                    <a href=""><img
                            src="https://images.unsplash.com/photo-1580236176063-bea7f16aec30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=672&q=80"
                            alt="" class="rounded h-full"></a>
                </div>
                <div class="">
                    <a href=""><img
                            src="https://images.unsplash.com/photo-1607677686474-ad91fc94f5ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=680&q=80"
                            alt="" class="rounded h-full"></a>
                </div>
            </div>
        </div>
    </div>
    <hr id="sales">
    {{-- Sales Section --}}
    <div class="w-full my-8">
        <div class="text-center xs:w-full">
            <h1 class="uppercase text-4xl pb-2">Sales</h1>
            <p class="my-4 px-5 text-sm font-thin tracking-tighter sm:px-14 sm:text-lg md:my-8 lg:px-60">Lorem ipsum
                dolor sit
                amet,
                consectetur
                adipiscing elit. Sed massa diam, feugiat
                at mi vel, suscipit pharetra lacus. Donec sit amet augue fermentum, auctor ante a,
                condimentum erat. </p>
        </div>
        <div class="swiper">
            <div class="flex shrink-0 grow gap-8 mx-5 my-10 lg:mx-48 overflow-x-scroll sm:mx-14 scrollbar ">
                <div class="xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 "id="slider">
                    <a href="/products/">
                        <img src="https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80"
                            alt=""
                            class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75 ">
                    </a>
                    <h1 class="text-center mt-4 text-md">Asus Gaming Laptop</h1>
                </div>


                <div class=" xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 "id="slider">
                    <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <h1 class="text-center mt-4 text-md">Gaming Keyboard</h1>

                </div>

                <div class="xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 " id="slider">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1928&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <h1 class="text-center mt-4 text-md">Logitech Mouse</h1>
                </div>


                <div class=" xs:mb-6 cursor-pointer shrink-0  w-1/2 sm:w-1/4 " id="slider">
                    <img src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <h1 class="text-center mt-4 text-md">IOS Headphone</h1>

                </div>

                <div class=" xs:mb-6 cursor-pointer shrink-0 w-1/2 sm:w-1/4 " id="slider">
                    <img src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80"
                        alt=""
                        class="rounded lg:h-96 h-40 object-cover w-full hover:scale-105 transition-all duration-200 delay-75">
                    <h1 class="text-center mt-4 text-md">IOS Headphone</h1>

                </div>
            </div>
        </div>
    </div>
    <hr>
    {{-- About us Section --}}
    <div class="w-full p-8 drop-shadow-2xl " id="about">
        <h1 class="font-bold text-center text-2xl py-5">ABOUT US</h1>

        <div class="grid grid-cols-1 items-center lg:mx-56  lg:grid-cols-2 mx-4 px-5 lg:text-lg text-sm">
            <img src="https://images.unsplash.com/photo-1470137237906-d8a4f71e1966?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1920&q=80"
                alt="" class=" justify-self-center rounded-2xl p-8 w-96 h-full object-cover">
            <div class="mt-8 ">
                <div class="w-full xs:text-center">
                    <h1 class="font-bold text-4xl mb-8">Why choose us?</h1>
                    <p class="font-thin tracking-tighter md:px-5 px-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Sed massa diam, feugiat at mi vel, suscipit pharetra
                        lacus. Donec sit amet augue fermentum, auctor ante
                        a, condimentum erat. Aenean in eleifend lorem. Etiam
                        elementum turpis lacus, eu viverra ligula auctor in.

                </div>
                </p>
            </div>
        </div>
    </div>
    <hr>
    {{-- Feedbacks Section --}}
    <div class="w-full font-bold text-center text-2xl p-8 ">
        <h1 class="text-center mb-10">Feedbacks</h1>

        <div class="flex gap-8 justify-center flex-wrap">
            <div class="p-4 shadow-lg sm:w-[16rem] flex sm:block sm:justify-around gap-4 w-full">
                <div class="text-center sm:w-full w-1/3">
                    <img src="https://i.pinimg.com/736x/50/9e/c0/509ec0cb3a7f1d47d67afc81a8751f70.jpg" alt=""
                        class="rounded-full sm:w-24 mb-4 mx-auto w-14">
                    <div>
                        <h1 class="sm:hidden text-sm">Thomas</h1>
                        <span
                            class="font-thin bg-red-600 text-gray-300 rounded px-1 py-1 sm:hidden inline-block text-xs ">React
                            Dev</span>
                    </div>
                </div>
                <div class="sm:block flex  items-center w-2/3 sm:w-full">
                    <h1 class="hidden sm:block">Thomas</h1>
                    <span
                        class="text-xs hidden font-thin text-gray-300 bg-red-600 rounded px-2 py-1 sm:inline-block">React
                        Dev</span>
                    <br>

                    <p class=" text-xs sm:text-sm font-thin sm:mt-6 ">Lorem ipsum dolor sit
                        amet
                        consectetur,
                        adipisicing elit.
                        Eius,
                        quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem
                        labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>

            </div>
            <div class="p-4 shadow-lg sm:w-[16rem] flex sm:block sm:justify-around gap-4 w-full">
                <div class="text-center sm:w-full w-1/3">
                    <img src="https://i.pinimg.com/736x/97/d7/8b/97d78bd627c7cb5935140fbb4f312a31.jpg" alt=""
                        class="rounded-full sm:w-24 mb-4 mx-auto w-14">
                    <div>
                        <h1 class="sm:hidden text-sm">Thomas</h1>
                        <span
                            class="font-thin bg-red-600 text-gray-300 rounded px-1 py-1 sm:hidden inline-block text-xs ">React
                            Dev</span>
                    </div>
                </div>
                <div class="sm:block flex  items-center w-2/3 sm:w-full">
                    <h1 class="hidden sm:block">Thomas</h1>
                    <span
                        class="text-xs hidden font-thin text-gray-300 bg-red-600 rounded px-2 py-1 sm:inline-block">React
                        Dev</span>
                    <br>

                    <p class=" text-xs sm:text-sm font-thin sm:mt-6 ">Lorem ipsum dolor sit
                        amet
                        consectetur,
                        adipisicing elit.
                        Eius,
                        quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem
                        labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>

            </div>

            <div class="p-4 shadow-lg sm:w-[16rem] flex sm:block sm:justify-around gap-4 w-full">
                <div class="text-center sm:w-full w-1/3">
                    <img src="https://i.pinimg.com/736x/d1/00/e6/d100e654ce2420bd44e343351f262542.jpg" alt=""
                        class="rounded-full sm:w-24 mb-4 mx-auto w-14">
                    <div>
                        <h1 class="sm:hidden text-sm">Thomas</h1>
                        <span
                            class="font-thin bg-red-600 text-gray-300 rounded px-1 py-1 sm:hidden inline-block text-xs ">React
                            Dev</span>
                    </div>
                </div>
                <div class="sm:block flex  items-center w-2/3 sm:w-full">
                    <h1 class="hidden sm:block">Thomas</h1>
                    <span
                        class="text-xs hidden font-thin text-gray-300 bg-red-600 rounded px-2 py-1 sm:inline-block">React
                        Dev</span>
                    <br>

                    <p class=" text-xs sm:text-sm font-thin sm:mt-6 ">Lorem ipsum dolor sit
                        amet
                        consectetur,
                        adipisicing elit.
                        Eius,
                        quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem
                        labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>

            </div>

            <div class="p-4 shadow-lg sm:w-[16rem] flex sm:block sm:justify-around gap-4 w-full">
                <div class="text-center sm:w-full w-1/3">
                    <img src="https://i.pinimg.com/736x/a8/82/15/a88215c61f2f631b47dcf2adf12b66c3.jpg" alt=""
                        class="rounded-full sm:w-24 mb-4 mx-auto w-14">
                    <div>
                        <h1 class="sm:hidden text-sm">Thomas</h1>
                        <span
                            class="font-thin bg-red-600 text-gray-300 rounded px-1 py-1 sm:hidden inline-block text-xs ">React
                            Dev</span>
                    </div>
                </div>
                <div class="sm:block flex  items-center w-2/3 sm:w-full">
                    <h1 class="hidden sm:block">Thomas</h1>
                    <span
                        class="text-xs hidden font-thin text-gray-300 bg-red-600 rounded px-2 py-1 sm:inline-block">React
                        Dev</span>
                    <br>

                    <p class=" text-xs sm:text-sm font-thin sm:mt-6 ">Lorem ipsum dolor sit
                        amet
                        consectetur,
                        adipisicing elit.
                        Eius,
                        quo tempora. Accusamus, dolorum. Nihil adipisci repellat totam perspiciatis laboriosam minus rem
                        labore libero. Temporibus accusantium tenetur soluta quia nisi inventore.</p>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.footer')

</body>

<script>
    const sliders = document.querySelectorAll("#slider");
    let isDown = false;
    let startX;
    let scrollLeft;
    for (let i = 0; i < sliders.length; i++) {
        sliders[i].addEventListener("mousedown", (e) => {
            isDown = true;
            sliders[i].classList.add("active");
            startX = e.pageX - sliders[i].offsetLeft;
            scrollLeft = sliders[i].scrollLeft;
        });
        sliders[i].addEventListener("mouseleave", (e) => {
            isDown = false;
            sliders[i].classList.remove("active");
        });
        sliders[i].addEventListener("mouseup", (e) => {
            isDown = false;
            sliders[i].classList.remove("active");
        });
        sliders[i].addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - sliders[i].offsetLeft;
            const walk = (x - startX) * 2; //scroll-fast
            sliders[i].scrollLeft = scrollLeft - walk;
        });
    }
</script>

</html>
