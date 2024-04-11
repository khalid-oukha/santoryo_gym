@extends('layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <div class="h-full ">
        <!-- Container -->
        <div class="mx-auto">
            <div class="flex justify-center px-6 py-12">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <img src="{{ URL::asset('assets/images/zorologin.jpg') }}"
                        class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg">
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-dark-200 dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-100 dark:text-white">Create an Account!</h3>

                        @if ($errors->any())
                            <div class=" border text-center border-red-400 text-red-500 px-4 py-3 rounded relative"
                                role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="POST"
                            class="px-8 pt-6 pb-8 mb-4  bg-dark-200 rounded">
                            @csrf
                            @method('POST')
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="form mb-4 md:mr-2 md:mb-0">
                                    <span id="firstname-message" class="text-red-500 text-xs italic mb-2"></span>

                                    <label class="block mb-2 text-sm font-bold text-gray-200 dark:text-white"
                                        for="firstName">
                                        First Name
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-800 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="firstName" type="text" placeholder="First Name" name="firstname" />
                                </div>
                                <div class="form md:ml-2">
                                    <span id="lastname-message" class="text-red-500 text-xs italic mb-2"></span>

                                    <label class="block mb-2 text-sm font-bold text-gray-200 dark:text-white"
                                        for="lastName">
                                        Last Name
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-800 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="lastName" type="text" placeholder="Last Name" name="lastname" />
                                </div>
                            </div>
                            <div class="form mb-4">
                                <span id="email-message" class="text-red-500 text-xs italic "></span>
                                <label class="block mb-2 text-sm font-bold text-gray-200 dark:text-white" for="email">
                                    Email
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-800 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email" type="email" placeholder="Email" name="email" />
                            </div>
                            <div class="form mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-200 dark:text-white"
                                        for="password">
                                        Password
                                    </label>
                                    <span id="password-message" class="text-red-500 text-xs italic "> </span>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-800 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="password" type="password" placeholder="******************" name="password" />

                                </div>

                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-orange-200 rounded-full hover:bg-orange-100 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Register Account
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a class="inline-block text-sm text-orange-100 dark:text-blue-500 align-baseline hover:text-orange-300"
                                    href="#">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="text-center">
                                <a class="inline-block text-sm text-orange-100 dark:text-blue-500 align-baseline hover:text-orange-300"
                                    href="./index.html">
                                    Already have an account? Login!
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/auth/signupValidation.js') }}"></script>
@endsection
