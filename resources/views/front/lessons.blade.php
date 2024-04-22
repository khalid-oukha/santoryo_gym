@extends('layouts.master')

@section('title')
    Lessons
@endsection

@section('css')
@endsection

@section('content')
    <main class=" customgradient  relative overflow-hidden ">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/pricnig.png') }}" alt=""
            srcset="">
        <div
            class="px-4 sm:px-6 lg:px-8 customgradientopacity  dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="flex my-16  relative   justify-center z-25 items-center flex-col w-1/2 py-5 mx-auto">
                <h2 class="font-bold text-4xl text-white pb-3 text-center">Elevate Your Workout Journey with Expert</h2>
                <span class="font-bold text-4xl pb-3 text-orange-100">CLASSES</span>
                <p class="text-gray-400 text-center">
                    In quisque nunc dictumst etiam pellentesque et. Vel malesuada diam lorem tellus. Amet mauris feugiat
                    ipsum natoque odio donec. Sit at lacus consequat justo odio condimentum dui. Faucibus id blandit feugiat
                    mi tellus sit etiam donec aliquam. Dictumst egestas ut facilisi vel.

                    Sem consequat fermentum pellentesque risus purus quis gravida. Nulla porttitor ultrices facilisis non
                    commodo diam morbi cursus eu. Semper ut in mauris gravida id cursus urna. Magnis vulputate orci risus
                    felis eget lectus morbi. Et cursus mauris condimentum pretium arcu sed dignissim.
                </p>

            </div>

        </div>

    </main>

    <section class=" darkgradient w-full h-full  relative overflow-hidden ">
        @if (session()->has('error'))
            <div
                class="alert alert-danger bg-red-700 text-white rounded-md my-4 px-4 py-3 shadow-md w-full max-w-sm mx-auto">
                {{ session()->get('error') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div
                class="alert alert-success bg-green-600 text-white rounded-md my-4 px-4 py-3 shadow-md w-full max-w-sm mx-auto">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="flex items-center justify-center">

            <div class="grid grid-cols-1 lg:w-3/4 gap-5 lg:grid-cols-3 lg:gap-10  ">
                @foreach ($lessons as $lesson)
                    <div class="">
                        <div class="max-w-sm  shadow-lg rounded-lg overflow-hidden my-4">
                            <img class="w-full h-56 object-cover object-center"
                                src="{{ asset('storage/images/lessons/' . $lesson->image) }}" alt="avatar">
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
                                        class="py-2 font-semibold text-primary-300">{{ $lesson->coach->user->firstname . ' ' . $lesson->coach->user->lastname }}</span>
                                </h3>

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
                                    <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                        <path
                                            d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z" />
                                        <g>
                                            <path
                                                d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z" />
                                        </g>
                                    </svg>
                                    <h4 class="px-2 text-sm">{{ $lesson->reserved_seats }} Reserved</h4>
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

                                    <a href="#_" class="relative px-6 py-2 font-medium text-white group">
                                        <span
                                            class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-orange-200 -rotate-12"></span>
                                        <div class="flex items-center mt-4 justify-between text-gray-100">
                                            <a href="{{ route('lesson.reservation',$lesson) }}"
                                                class="relative px-6 bg-green-500 py-2 font-medium text-white group {{ in_array($lesson->id, $userReservations) ? 'disabled opacity-50 cursor-not-allowed' : '' }}">
                                                <span class="relative">Reserve Now</span>
                                            </a>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="mt-4">
                {{ $lessons->links() }}
            </div>
        </div>

    </section>
@endsection

@section('scripts')
@endsection
