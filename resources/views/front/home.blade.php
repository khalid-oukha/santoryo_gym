@extends('layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <main class=" customgradient  relative overflow-hidden ">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/herobg.png') }}" alt=""
            srcset="">
        <div class="px-4 sm:px-6 lg:px-8 customgradient dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-12 sm:flex relative">
                <div class="sm:w-2/3 lg:w-1/2 sm:flex flex-col sm:relative z-50">
                    <span class="w-16 h-2 bg-orange-100 dark:bg-white mb-4 sm:mb-6"></span>
                    <h1
                        class="font-bebas-neue uppercase text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black flex flex-col leading-tight dark:text-white text-white mb-4 sm:mb-6">
                        Elevate Your Fitness Journey WITH Gym
                        <span class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-orange-100">
                            SANTORYO
                        </span>
                    </h1>
                    <p class="text-sm sm:text-base text-white dark:text-white mb-6 sm:mb-8">
                        Unleash the best version of yourself at Santoryo Gym. Our state-of-the-art facilities, expert
                        trainers, and vibrant community are here to inspire and guide you on your fitness journey.
                    </p>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center">
                        <a href="{{ route('pricing.index') }}"
                            class="uppercase py-2 px-4 rounded-lg bg-orange-100 border-2 border-transparent text-white text-md mr-0 sm:mr-4 mb-2 sm:mb-0 hover:bg-pink-400">
                            Get started
                        </a>
                        <a href=""
                            class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-orange-100 text-orange-100 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            Read more
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block  lg:w-3/5 relative">
                    <img src="{{ asset('assets/images/hero1.png') }}" class="w-full  m-auto" />
                </div>
            </div>
        </div>

    </main>

    <section class=" darkgradient w-full h-full  relative overflow-hidden ">
        <img class="absolute inset-0 object-cover " src="{{ asset('assets/images/section2.png') }}" alt=""
            srcset="">

        <div
            class=" py-20 px-8 darkgradient  w-full h-full dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex relative pt-12">
                <div class="sm:w-2/3  lg:w-50 flex flex-col relative z-50">
                    <span class="w-20 h-2  bg-orange-100 dark:bg-white mb-12">
                    </span>
                    <h2
                        class="font-bebas-neue uppercase text-4xl sm:text-4xl font-black flex flex-col leading-none dark:text-white text-white">
                        About Santoryo Gym
                        <span class="text-4xl sm:text-4xl text-orange-100 ">
                            SANTORYO
                        </span>
                    </h2>
                    <p class="text-sm sm:text-base py-4 text-white dark:text-white">
                        At Santoryo, we believe that a gym is not just a place to work out; it's a community that fosters
                        holistic well-being. Our story began with a passion for empowering individuals to lead healthier,
                        happier lives. Today, Santoryo Gym stands as a testament to that commitment.

                        Santoryo is more than a gym; it's a lifestyle movement. We are dedicated to providing a welcoming
                        and inclusive space where individuals of all fitness levels can thrive. Our mission is to inspire,
                        motivate, and guide you on your journey towards a stronger, healthier, and more vibrant life.

                        Expert Guidance: Our team of experienced trainers is committed to your success. Whether you're a
                        beginner or an advanced fitness enthusiast, we tailor our guidance to meet your unique needs.
                        State-of-the-Art Facilities: Santoryo Gym is equipped with cutting-edge fitness equipment, ensuring
                        a dynamic and effective workout experience.
                    </p>
                    <div class="flex mt-8">
                        <a href="#"
                            class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-orange-100 text-orange-100 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            About us
                        </a>
                    </div>
                </div>
                <div class=" hidden lg:block lg:w-3/5 relative">
                    <img src="{{ asset('assets/images/aboutimg.png') }}" class="max-w-1/2 md:max-w-xl m-auto" />
                </div>
            </div>
        </div>





        <main class=" customgradient  relative overflow-hidden ">
            <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/herobg.png') }}" alt=""
                srcset="">
            <div class="px-4 sm:px-6 lg:px-8 customgradient dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
                <div class="w-full mx-auto max-w-7xl">
                    <div class="grid items-center gap-10 lg:grid-cols-2">
                        <div class="text-white">
                            <h2 class="text-white mb-6 py-8 text-3xl font-extrabold md:text-4xl">Experience Santoryo Gym Management System</h2>
                            <p class="text-white" >Discover the comprehensive world of Santoryo Gym Management System, designed to streamline every aspect of your fitness center operations. Dive deep into our intuitive platform, where efficiency meets innovation.</p>
                            
                            <button
                                class='bg-[#333] my-4 hover:bg-[#111] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>Learn
                                more
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                                    viewBox="0 0 492.004 492.004">
                                    <path
                                        d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                                        data-original="#000000" />
                                </svg>
                            </button>
                        </div>
                        <div class="grid gap-8 sm:grid-cols-2">
                            @foreach ($latestCatgories as $latestCatgorie)
                            <div class="text-center bg-white shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-16 relative">
                                <img src="{{ asset("storage/images/$latestCatgorie->image") }}" class="absolute inset-0 w-full h-full object-cover rounded-xl" />
                                <div class="absolute inset-0 flex flex-col justify-center items-center">
                                    <h3 class="mt-8 mb-4 text-white  text-lg font-semibold">{{ $latestCatgorie->name }}</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    
        </main>

    <section class=" darkgradient w-full h-full  relative overflow-hidden ">
        <h2 class="flex justify-center font-bold text-4xl text-white  py-5"> Classes</h2>
        <div class="flex items-center justify-center">

            <div class="grid grid-cols-1 lg:w-3/4 gap-5 lg:grid-cols-3 lg:gap-10  ">
                @foreach ($lessons as $lesson)

                <div class="">
                    <div class="max-w-sm  shadow-lg rounded-lg overflow-hidden my-4">
                        <img class="w-full h-56 object-cover object-center" src="{{ asset('storage/images/lessons/' . $lesson->image) }}"
                            alt="avatar">
                        <div class="flex items-center px-6 py-3 ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#e66700"
                                    d="M96 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V224v64V448c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V384H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H96V64zm448 0v64h32c17.7 0 32 14.3 32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32v64c0 17.7-14.3 32-32 32H544v64c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32V288 224 64c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32zM416 224v64H224V224H416z" />
                            </svg>
                            <h1 class="mx-3 text-white font-semibold text-lg">{{ $lesson->Category->name }}</h1>
                        </div>
                        <div class="py-4  px-6">
                            <h3 class="text-2xl font-semibold text-gray-100">{{ $lesson->title }}</h3>
                            <h3 class="text-1xl font-semibold text-gray-300">Coash : <span
                                    class="py-2 font-semibold text-primary-300">{{ $lesson->coach->user->firstname . ' ' .   $lesson->coach->user->lastname}}</span></h3>

                            <div class="flex items-center mt-4 text-gray-100">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                                    <g>
                                        <path
                                            d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                                    </g>
                                </svg>
                                <h4 class="px-2 text-sm">{{ $lesson->capacity }} Member</h4>
                            </div>
                            <div class="flex items-center mt-4 text-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#d9dce3"
                                        d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <h4 class="px-2 text-sm">{{ $lesson->duration }} min</h4>
                            </div>
                            <div class="flex items-center mt-4 text-gray-100">
                                <span class="w-2 py-3 bg-orange-100">
                                </span>
                                <span class="px-3 font-semibold text-gray-100">{{ $lesson->start_at }}</span>

                            </div>
                            <div class="flex items-center mt-4 justify-between text-gray-100">
                                <a href="{{ route('lesson.reservation',$lesson) }}"
                                class="relative px-6 bg-green-500 py-2 font-medium text-white group {{ in_array($lesson->id, $userReservations) ? 'disabled opacity-50 cursor-not-allowed' : '' }}">
                                <span class="relative">Reserve Now</span>
                            </a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="flex justify-center py-8 items-center">
            <div>
                <a  href="{{ route('lessonsList.index') }}" class="relative px-8 py-2 font-medium text-white group">
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-orange-500 group-hover:bg-primary-100 group-hover:skew-x-12"></span>
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-orange-800 group-hover:bg-primary-300 group-hover:-skew-x-12"></span>
                    <span
                        class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary-400 -rotate-12"></span>
                    <span
                        class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                    <span class="relative">View all</span>
                </a>
            </div>
        </div>

    </section>


    <section class="relative   w-full h-full    overflow-hidden ">
        <img class="absolute  blur-lg inset-0 object-cover w-full h-full" src="{{ asset('assets/images/herobg.png') }}" alt=""
        srcset="">
        <div class=" w-full h-full darkgradients  z-20 relative ">
            <div class="flex  relative   justify-center items-center flex-col w-1/2 py-5 mx-auto">
                <h2 class="font-bold text-4xl text-white pb-3 text-center">Elevate Your Workout Journey with Expert</h2>
                <span class="font-bold text-4xl pb-3 text-orange-100">Coaches</span>
                <p class="text-gray-400 text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni voluptatibus libero quaerat dignissimos vero
                    officiis recusandae tenetur distinctio totam inventore illo assumenda molestiae est odit animi commodi nostrum,
                    atque expedita?
                </p>
            </div>

            <div class="flex relative items-center justify-center">

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-10 px-16 ">
                    @foreach ($coachs as $coach)

                    <div class="">
                        <div class="max-w-sm border border-red-900 shadow-lg rounded-lg overflow-hidden my-4">
                            <img class="w-full h-56 object-cover object-center" src="{{ asset('storage/images/uploads/' . $coach->user->image) }}"
                                alt="avatar">
                            <div class=" px-6 py-3 ">
                                <h3 class="text-2xl font-semibold text-gray-100">{{ $coach->user->firstname . ' '  . $coach->user->lastname }}</h3>
                                <p class="  text-gray-400">{{ $coach->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>
@endsection

@section('scripts')
@endsection
