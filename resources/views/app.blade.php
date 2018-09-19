<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} Programming Language</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="fixed pin bg-black flex flex-col items-center justify-center text-white">
            <div class="text-8xl uppercase text-white ">{{ config('app.name') }}</div>
            <div class="text-lg uppercase tracking-wide text-grey-darker">Programming Language</div>
            <div class="mt-12">
<pre class="code leading-loose text-xs md:text-base">
release_date = (language) => {
    return language == 'nuua' ? 2019 : 'Unknown'
}

release_date -> ('nuua') // 2019
</pre>
            </div>
            <div class="mt-12 text-sm text-grey-darkest">
                &copy; Copyright {{ date('Y') }}
                <a href="https://erik.cat">Erik Campobadal</a>
            </div>
        </div>
    </body>
</html>
