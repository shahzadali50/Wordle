@extends('layouts.app')

@section('content')
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <h2 class="font-heading mb-4 font-bold tracking-tight text-gray-900 text-red-500 text-3xl sm:text-5xl">
                    Get in Touch
                </h2>
                <p class="mx-auto mt-4 text-gray-50">Just leave us a message.
                </p>
            </div>
        </div>
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">

                <div class="text-center pb-6">
                    <h1 class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">Contact Us!</h1>
                    <p class="text-neutral-50">
                        Fill up the form below to send us a message.
                    </p>
                </div>

                <form>

                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500 hover:border-green-500"
                        type="text" placeholder="Name" name="name">

                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500 hover:border-green-500"
                        type="email" placeholder="Email" name="email">

                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500 hover:border-green-500"
                        type="text" placeholder="Subject" name="_subject">

                    <textarea
                        class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500 hover:border-green-500"
                        type="text" placeholder="Type your message here..." name="message" style="height: 121px;"></textarea>

                    <div class="flex justify-between">
                        <input
                            class="shadow bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" value="Send ➤">
                        <input
                            class="shadow bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="reset" value="Reset ➤">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
