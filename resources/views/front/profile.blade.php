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
                            <h2 class="flex pr-4 text-xl font-light text-gray-100 sm:text-3xl">
                                {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</h2>
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
                    <h1 class="text-lg font-semibold text-gray-100 sm:text-xl">
                        {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</h1>
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

                @if ($hasSubscription)
                    @include('front.layouts-profile.member')
                @else
                    @include('front.layouts-profile.geust')
                @endif



            </div>

        </div>

    </div>

@endsection

@section('scripts')
@endsection
