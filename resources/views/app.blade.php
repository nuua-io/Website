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
        <div class="flex items-center justify-center -mx-2">
            <div class="w-full md:w-2/3 xl:w-1/2 px-2">
                <div class="bg-white rounded shadow -mt-32">
                    <div class="bg-grey-lighter px-6 py-4 rounded-t">
                        src/sample.nu
                    </div>
                    <div class="p-6">
<pre class="code leading-loose text-xs md:text-base">release_date = (language) => {
    return language == 'nuua' ? 2019 : 'Unknown'
}

release_date -> ('nuua') // 2019
</pre>
                    </div>
                </div>
                <div class="mt-6 flex justify-center">
                    <div class="text-grey-dark">
                        &copy; Copyright 2018 <a class="https://erik.cat"> Erik Campobadal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
