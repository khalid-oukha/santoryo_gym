@extends('layouts.master')

@section('title')
    Home
@endsection

@section('css')
@endsection

@section('content')
    <div class="py-16">
        <div class="flex  rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <img src=" {{ URL::asset('assets/images/registerimg.png') }}" class="hidden lg:block lg:w-1/2 bg-cover">


            <div class="w-full bg-dark-200 p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-200 text-center">Santoryo</h2>
                <p class="text-xl text-gray-300 text-center">Welcome back!</p>

                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-200 uppercase">or login with email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                @if ($errors->any())
                <div class="border text-center border-red-500 text-red-500 px-4 py-2 rounded relative my-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs italic mb-2">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form  action="{{ Route('login') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div  class="mt-4 form">
                        <span id="email-message" class="text-red-500 text-xs italic mb-2" ></span>
                        <label class="block text-gray-300 text-sm font-bold mb-2">Email Address</label>
                        <input id="email" name="email" value="{{ old('email') }}"
                            class="bg-gray-300 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="email" />
                    </div>
                    <div class="mt-4 form">
                        <div class="flex justify-between">
                            <label  class="block text-gray-300 text-sm font-bold mb-2">Password</label>
                            <a href="{{ route('forget.passwordform') }}" class="text-xs text-gray-300">Forget Password?</a>
                        </div>
                        <span id="password-message" class="text-red-500 text-xs italic mb-2"></span>

                        <input id="password" name="password" value="{{ old('password') }}"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="password" />
                    </div>
                    <div class="mt-8">
                        <button id="submitBtn" type="submit"
                            class="bg-orange-300 text-white font-bold py-2 px-4 w-full rounded hover:bg-orange-100">Login</button>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="{{ route('registerform') }}" class="text-xs text-gray-300 uppercase">or sign up</a>
                        <span class="border-b w-1/5  md:w-1/4"></span>
                    </div>
                </form>

            </div>


        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/auth/loginValidation.js') }}"></script>
@endsection
