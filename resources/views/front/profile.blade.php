@extends('layouts.master')

@section('title')
    pricing
@endsection

@section('css')
@endsection

@section('content')
    <main class=" customgradient  relative overflow-hidden ">
        <img class="absolute inset-0 object-cover w-full h-full" src="{{ asset('assets/images/pricnig.png') }}" alt=""
            srcset="">
        <div class="px-4 sm:px-6  lg:px-8 customgradient  dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="flex   relative my-8  justify-center z-25 items-center flex-col w-1/2 py-5 mx-auto">
                <div class="flex flex-col items-start w-full m-auto sm:flex-row">
                    <div class="flex mx-auto sm:mr-10 sm:m-0">
                        <div class="items-center justify-center w-20 h-20 m-auto mr-4 sm:w-32 sm:h-32">
                            <img alt="profil"
                                src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                class="object-cover w-20 h-20 mx-auto rounded-full sm:w-32 sm:h-32" />
                        </div>
                    </div>
                    <div class="flex  flex-col pt-4 mx-auto my-auto sm:pt-0 sm:mx-0">
                        <div class="flex flex-col mx-auto sm:flex-row sm:mx-0 ">
                            <h2 class="flex pr-4 text-xl font-light text-gray-100 sm:text-3xl">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname  }}</h2>
                            <div class="flex">
                                <a
                                    class="flex items-center px-1 text-sm font-medium text-gray-100 bg-transparent border border-gray-200 rounded outline-none sm:ml-2 hover:bg-blue-600 hover:text-white focus:outline-none hover:border-blue-700">Edit
                                    profile</a>
                                <a class="p-1 ml-2 text-gray-200 border-transparent rounded-full cursor-pointer hover:text-blue-600 focus:outline-none focus:text-gray-600"
                                    aria-label="Notifications">
                                    <svg class="w-4 h-4 sm:w-8 sm:h-8" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full pt-5">
                    <h1 class="text-lg font-semibold text-gray-100 sm:text-xl">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname  }}</h1>
                    <p class="text-sm text-gray-300 md:text-base">Memeber</p>
                    <p class="text-sm text-gray-100 md:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate, quam?</p>
                </div>


            </div>

        </div>

    </main>
    <div class="bg-black">
        <div class="relative ">
            <div class="absolute inset-0 h-1/2 customgradient"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-lg  mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                    <div class="flex-1  bg-gray-900 px-6 py-8 lg:p-12">
                        <h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $offer[0]->title }}</h3>
                        <p class="mt-6 text-base text-gray-300">{{ $offer[0]->description }}</p>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <h4
                                    class="flex-shrink-0 pr-4 bg-gray-900 text-sm tracking-wider font-semibold uppercase text-rose-600">
                                    What's included</h4>
                                <div class="flex-1 border-t-2  border-gray-600"></div>
                            </div>
                            <ul role="list"
                                class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg></div>
                                    <p class="ml-3 text-sm  text-gray-300">Access to premium
                                        features</p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg></div>
                                    <p class="ml-3 text-sm text-gray-300">Mobile and web
                                        access</p>
                                </li>
                                <li class="flex items-start lg:col-span-1">
                                    <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg></div>
                                    <p class="ml-3 text-sm text-gray-300">Lifetime access
                                        with no additional costs</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="py-8 px-6 text-center bg-gray-900 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                        <p class="text-lg leading-6 font-medium text-white">Membership expired on</p>
                        <div class="">
                            <span style="opacity:0.5"
                                class="font-mono text-xl md:text-lg font-medium text-gray-400 ">{{ $subscriptions[0]->end_date }}</span>
                                @if ($subscriptions[0]->status == 'active')
                                    <span class="text-green-600 text-sm">{{$subscriptions[0]->status}}</span>

                                @else
                            <span class="text-red-600 text-sm">{{$subscriptions[0]->status}}</span>
                                @endif
                        </div>
                        <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
                            <span>{{ $offer[0]->price }}</span>
                            <span class="ml-3 text-xl font-medium text-gray-400">DH</span>
                        </div>
                        <div class="mt-6">
                            @if ($subscriptions[0]->status == 'ended')
                                <a href=""
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">Upgrade Subscription</a>

                            @else
                                <a href=""
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">Get Your pass </a>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="px-px md:px-3 bg-gray-900">

                    <!-- user following for mobile only -->
                    <ul
                        class="flex justify-around p-2 space-x-8 text-sm leading-snug text-center text-gray-600 border-t md:hidden">
                        <li>
                            <span class="block font-semibold text-gray-200">136</span>
                            posts
                        </li>

                        <li>
                            <span class="block font-semibold text-gray-200">40.5k</span>
                            followers
                        </li>
                        <li>
                            <span class="block font-semibold text-gray-200">302</span>
                            following
                        </li>
                    </ul>

                    <!-- insta freatures -->
                    <ul
                        class="flex items-center justify-around space-x-12 text-xs font-semibold tracking-widest text-gray-200 uppercase border-t md:justify-center">
                        <!-- posts tab is active -->
                        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-400">
                            <a class="inline-block p-3" href="#">
                                <i class="text-xl fas fa-th-text-gray-200 large md:text-xs"></i>
                                <span class="hidden text-gray-200 md:inline">Pending</span>
                            </a>
                        </li>
                        <li>
                            <a class="inline-block p-3" href="#">
                                <i class="text-xl text-white far fa-square md:text-xs"></i>
                                <span class="hidden text-green-500 md:inline">accepted</span>
                            </a>
                        </li>

                    </ul>


                    <div class="flex py-8 flex-col">
                        <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-700   dark:bg-gray-800">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                    <div class="flex items-center gap-x-3">
                                                        <input type="checkbox"
                                                            class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                                        <button class="flex items-center gap-x-2">
                                                            <span>Spectator name</span>

                                                            <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.1" />
                                                                <path
                                                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.1" />
                                                                <path
                                                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                                    fill="currentColor" stroke="currentColor"
                                                                    stroke-width="0.3" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                    EMAIL
                                                </th>
                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                    DATE
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                    Status
                                                </th>

                                                <th scope="col"
                                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                                    status actions
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody
                                            class="bg-transparent divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                                <tr>
                                                    <td
                                                        class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                        <div class="inline-flex items-center gap-x-3">
                                                            <input type="checkbox"
                                                                class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                                            <div class="flex items-center gap-x-2">

                                                                <h2 class="text-sm font-medium text-gray-200 dark:text-white ">
                                                                </h2>
                                                            </div>
                                                        </div>
                                </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">

                                </td>
                                <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap"> </td>

                                <td class="px-4 py-4 text-sm text-gray-200  dark:text-gray-300 whitespace-nowrap">

                                </td>
                                <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">

                                            <a href=""
                                                onclick="return confirm('Do you really want to Accept this event ?');">
                                                <div
                                                    class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <button
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Edit">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </a>
                                            <a href="">
                                                <div
                                                    class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                                    <button
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Edit">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </a>

                                        </div>
                                </td>

                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')
@endsection
