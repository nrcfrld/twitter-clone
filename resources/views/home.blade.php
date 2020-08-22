@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="lg:w-1/6 w-1/12">
            <div class="flex items-center mb-6 py-4">
                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><g fill="#42ade2"><path d="M59.8 24.3s1.1-6.2-3.5-3.4c0 0-.4-6.3-4.3-1.9c0 0-2.1-3.9-4.4-.3c-3.1 4.8-5.2 12.4-3.2 25l3.8-2.5c2.7-7.9 12.4-8.8 13.7-13.1c.9-3-2.1-3.8-2.1-3.8"/><path d="M22.1 17.6l-9.9 3.6C14.4 9.2 28.8 10 28.8 10s-6.8 3.2-6.7 7.6"/><path d="M23.7 19.8l-10.5 1.4C18 10 31.9 13.9 31.9 13.9s-7.3 1.6-8.2 5.9"/></g><g fill="#ffd93b"><path d="M2 29l5.4-1.4v3.6c0-.1-3.3-.6-5.4-2.2"/><path d="M7.4 27.5L2 24.8c3.6-2.8 7.7-1.9 7.7-1.9l-2.3 4.6z"/></g><g fill="#e08828"><path d="M33.8 53h-2.1v7.9c-.3.1-2.1-.1-2.9-.1c-1.8 0-3.3 1.3-3.3 1.3h8.3V53"/><path d="M25 53h-2.1v7.9c-.3.1-2.1-.1-2.9-.1c-1.8 0-3.3 1.3-3.3 1.3H25V53"/></g><path d="M54 36.2c3.9 0-4.1 17.5-23.3 17.5c-13 0-23.9-5.2-23.9-21.5c0-10.1 6.4-18.3 19.5-15c13.3 3.5 6.5 19 27.7 19" fill="#42ade2"/><path d="M37.6 51.7c-15.6 0-14-12-27.9-11.2c5.1 15.8 27.9 11.2 27.9 11.2" fill="#fff"/><path d="M39.1 29.2c-10-9.8-20.2 6.2-7.9 12.6C43.3 48 51.6 37 51.6 37s-6.1-1.5-12.5-7.8" fill="#297b9d"/><circle cx="15.1" cy="24.9" r="2.5" fill="#3e4347"/></svg>
                <span class="ml-3 font-bold text-xl hidden lg:inline">Twitter-Clone</span>
            </div>
            @include('_sidebar_links')
        </div>
        <div class="flex-1 lg:mx-10 border-r border-l">
            <h1 class="font-extrabold py-5 px-4 mb-4 text-xl border-b">Home</h1>
            <div class="flex p-4 border-b-8">
                <img src="https://picsum.photos/id/1074/60.webp" alt="Profile image" class="w-16 h-16 rounded-full mr-4">
                <form class="flex-auto" action="">
                    <textarea name="body" id="body" class="w-full focus:outline-none text-gray-800" placeholder="What's happen ?"></textarea>
                    <hr class="my-4">
                    <button type="submit" class="inline-block float-right rounded-full bg-blue-500 shadow py-2 px-4 font-bold text-white hover:bg-blue-600">Tweet</button>
                </form>
            </div>
            <div id="timeline" class="mt-4">
                <div class="tweet-posts px-4 flex border-b py-6">
                    <div class="tweet-posts-profile mr-4">
                        <img src="https://picsum.photos/60.webp" alt="User photo" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="tweet-posts-content flex-1">
                        <div class="tweet-posts-content-meta mb-2">
                            <ul class="flex">
                                <li><h4 class="font-semibold">Bambang Skuy</h4></li>
                                <li class="mx-2 text-gray-500">&bullet;</li>
                                <li class="text-gray-500">1h</li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, nihil repudiandae possimus unde repellendus beatae maxime, quas assumenda modi est asperiores dolorum quibusdam perferendis hic saepe. Quas nesciunt vero delectus? </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/5 hidden lg:block pb-4">
            @include('_friends_list')
        </div>
    </div>
@endsection
