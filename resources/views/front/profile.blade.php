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
                    <div class="flex flex-col pt-4 mx-auto my-auto sm:pt-0 sm:mx-0">
                        <div class="flex flex-col mx-auto sm:flex-row sm:mx-0 ">
                            <h2 class="flex pr-4 text-xl font-light text-gray-100 sm:text-3xl">AlexNoah7</h2>
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
                    <h1 class="text-lg font-semibold text-gray-100 sm:text-xl">Alexander Noah</h1>
                    <p class="text-sm text-gray-300 md:text-base">Fotografer</p>
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
                <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                    <div class="flex-1  bg-gray-900 px-6 py-8 lg:p-12">
                        <h3 class="text-2xl font-extrabold text-white sm:text-3xl">Exclusive
                            Offer</h3>
                        <p class="mt-6 text-base text-gray-300">Limited time offer: Get
                            access to our premium service with exclusive
                            features. This package includes access to both our web and mobile applications. Take
                            advantage of this offer
                            now and enjoy lifetime benefits.</p>
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
                        <p class="text-lg leading-6 font-medium text-white">Limited Time
                            Offer</p>
                        <div class="">
                            <span style="opacity:0.5"
                                class="font-mono text-xl md:text-lg font-medium text-gray-400 ">$</span>
                            <span style="opacity:0.5" class="h1 line-through text-gray-600">199.99</span><span
                                class="line-through relative text-gray-600 text-center text-sm mb-4">/mo</span>
                            <span class="text-red-600 text-sm">Special promotion</span>
                        </div>
                        <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
                            <span>$99.99</span>
                            <span class="ml-3 text-xl font-medium text-gray-400">USD</span>
                        </div>
                        <div class="mt-6">
                            <div class="rounded-md shadow"><a href="https://example.com/checkout"
                                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">Get
                                    Exclusive Access</a></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

@endsection

@section('scripts')
@endsection
