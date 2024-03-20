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
        <div class="px-4 sm:px-6 lg:px-8 customgradientopacity  dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="flex my-16  relative   justify-center z-25 items-center flex-col w-1/2 py-5 mx-auto">
                <h2 class="font-bold text-4xl text-white pb-3 text-center">Elevate Your Workout Journey with Expert</h2>
                <span class="font-bold text-4xl pb-3 text-orange-100">Coaches</span>
                <p class="text-gray-400 text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni voluptatibus libero quaerat dignissimos vero
                    officiis recusandae tenetur distinctio totam inventore illo assumenda molestiae est odit animi commodi nostrum,
                    atque expedita?
                </p>
            </div>
        </div>

    </main>
    <section class=" dark:bg-gray-900">
        <div class="container px-6  mx-auto">
    
            <div class="flex flex-col items-center justify-center mt-12 space-y-6 md:items-end md:-mx-5 md:space-y-0 md:flex-row">
                <div class="w-full px-6 py-4 transition-colors duration-300 transform rounded-lg md:mx-5 md:w-96 bg-dark-400 dark:bg-gray-800">
                    <div class="text-center">
                        <p class="text-2xl font-semibold text-gray-200 dark:text-gray-100">Basic</p>
                        <p class="mt-4 text-gray-300 dark:text-gray-300">Essentail Features</p>
                        <h4 class="mt-2 text-gray-600 line-through dark:text-gray-400">$59.99</h4>
                        <h4 class="mt-2 text-4xl font-semibold text-gray-200 dark:text-gray-100">$53.99</h4>
                        <p class="mt-4 text-gray-300 dark:text-gray-300">/per month</p>
                        <p class="mt-4 text-gray-300 dark:text-gray-300">Bill all 6 months</p>
                    </div>
    
                    <div class="mt-8 space-y-8">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
    
                            <span class="mx-4 text-gray-300 dark:text-gray-300">Access all features</span>
                        </div>
    
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
    
                            <span class="mx-4 text-gray-300 dark:text-gray-300">5 wathclists included</span>
                        </div>
    
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
    
                            <span class="mx-4 text-gray-300 dark:text-gray-300">Chat support</span>
                        </div>
    
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
    
                            <span class="mx-4 text-gray-300 dark:text-gray-300">Optimize hashtags</span>
                        </div>
    
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
    
                            <span class="mx-4 text-gray-300 dark:text-gray-300">5 exclusive widgets</span>
                        </div>
                    </div>
    
                    <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-orange-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Choose Basic
                    </button>
                </div>
    
                <div class="w-full overflow-hidden transition-colors duration-300 transform rounded-lg md:mx-5 md:w-96 bg-dark-400 dark:bg-gray-800">
                    <p class="py-2 text-sm text-center text-white uppercase bg-orange-500">Recommended by experts</p>
                    <div class="px-6 py-4">
                        <div class="text-center">
                            <p class="text-2xl font-semibold text-gray-200 dark:text-gray-100">Pro</p>
                            <p class="mt-4 text-gray-300 dark:text-gray-300">Advanced Features</p>
                            <h4 class="mt-2 text-gray-600 line-through dark:text-gray-400">$89.99</h4>
                            <h4 class="mt-2 text-4xl font-semibold text-gray-200 dark:text-gray-100">$80.99</h4>
                            <p class="mt-4 text-gray-300 dark:text-gray-300">/per month</p>
                            <p class="mt-4 text-gray-300 dark:text-gray-300">Bill all 6 months</p>
                        </div>
    
                        <div class="mt-8 space-y-8">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
    
                                <span class="mx-4 text-gray-300 dark:text-gray-300">Access all features</span>
                            </div>
    
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
    
                                <span class="mx-4 text-gray-300 dark:text-gray-300">Unlimited wathclists</span>
                            </div>
    
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
    
                                <span class="mx-4 text-gray-300 dark:text-gray-300">Chat support</span>
                            </div>
    
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
    
                                <span class="mx-4 text-gray-300 dark:text-gray-300">Optimize hashtags</span>
                            </div>
    
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
    
                                <span class="mx-4 text-gray-300 dark:text-gray-300">10+ exclusive pro widgets</span>
                            </div>
                        </div>
    
                        <button class="w-full px-4 py-2 mt-10 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-orange-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Choose Pro
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection
