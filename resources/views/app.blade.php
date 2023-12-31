<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', env('APP_NAME'))</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body  class=" py-6 flex flex-col justify-between items-center min-h-screen">

       <main role="main" class="flex flex-col justify-center items-center">
            @yield('contant')
       </main>

        <footer>
            <p class="text-gray-400">
              &copy; copyright {{ date('d/m/Y') }} &middot;
              @if (!Route::is("app_about"))
                <a href={{Route("app_about")}} class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
              @endif
            </p>
        </footer>
    </body>
</html>
