<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} Programming Language</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="bg-grey-lighter">
    <div class="bg-black pt-32 pb-56 shadow white-text flex items-center justify-center">
        <div class="flex items-center flex-col">
            <div class="text-6xl uppercase text-white tracking-wide">Nuua</div>
            <div class="text-xl uppercase text-grey-dark tracking-wide">Programming language</div>
        </div>
    </div>
    <div class="container">
        <div class="flex items-center justify-center -mx-2 px-2 md:px-0">
            <div class="w-full md:w-2/3 xl:w-1/2 px-2">
                <div class="bg-white rounded shadow -mt-32">
                    <div class="bg-grey-lighter px-6 py-4 rounded-t">
                        src/sample.nu
                    </div>
                    <div class="p-6">
<pre class="code leading-loose text-xs md:text-base">
is_released = () -> now().year == 2019

show_msg = (lang) => print(lang + " is not released")

while (!is_released()) => show_msg('nuua')
</pre>
                    </div>
                </div>
                <div class="mt-4 bg-white rounded shadow p-6">
                    <div class="text-xl mb-4">Are you interested?</div>
                    <div class="text-justify">
                        You can enter your email address here and you'll recieve relevant information about the
                        language evolution and a lot of cool information that might be of your interest. <b>We do not
                        send spam</b> and we only send an email if it's relevant.
                    </div>
                    <form action="{{ route('newsletter') }}" method="POST">
                        @csrf
                        <input class="border rounded w-full px-4 py-2 mt-4 text-lg {{ $errors->has('email') ? 'border-red' : '' }}" placeholder="Enter your email address" name="email" type="email">
                        @if ($errors->has('email'))
                            <div class="text-red mt-2">{{ $errors->first('email') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="text-green mt-2">{{ session('success') }}</div>
                        @endif
                        <div class="flex justify-center">
                            <button class="mt-4 px-4 py-2 bg-black text-white rounded" type="submit">Add me to the newsletter!</button>
                        </div>
                    </form>
                </div>
                <div class="mt-4 flex items-center justify-center -mx-4">
                    <a href="https://codefund.io/" class="px-4">
                        <img src="{{ asset('svg/codefund.svg') }}" alt="Codefund" class="h-8">
                    </a>
                    <a href="https://www.upc.edu" class="px-4">
                        <img src="{{ asset('img/upc.png') }}" alt="UPC" class="h-16">
                    </a>
                </div>
                <div class="mt-4 flex justify-center">
                    <div class="text-grey-dark">
                        &copy; Copyright {{ date('Y') }} <a class="text-black" href="https://erik.cat"> Erik Campobadal</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
