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
        <div
            class="px-4 sm:px-6 lg:px-8 customgradientopacity  dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="flex my-16  relative   justify-center z-25 items-center flex-col w-1/2 py-5 mx-auto">
                <h2 class="font-bold text-4xl text-white pb-3 text-center">Welcome to Santoryo Gym: Your Journey to Fitness
                    Begins Here!</h2>

                <svg viewBox="0 0 24 24" class="text-green-100 w-16 h-16 mx-auto my-6">
                    <path fill="currentColor"
                        d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                    </path>
                </svg>
                <h3 class="md:text-2xl text-base text-gray-200 font-semibold text-center">Payment Done!</h3>
                <p class="text-gray-300 my-2">Thank you for completing your secure online payment.</p>
                <p class="text-gray-300 "> Have a great day! </p>
                <div class="py-10 text-center">
                    <a href="" class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-orange-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Get Your Pass Now
                    </a>
                </div>
            </div>
        </div>

    </main>

@endsection

@section('scripts')
@endsection
