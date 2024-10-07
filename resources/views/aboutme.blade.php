<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Iago Fariñas - About me') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @include('popper::assets')
</head>
<body class="antialiased transition duration-200 text-zinc-900 dark:text-zinc-100 dark:bg-zinc-900">
    <div class="navbar flex text-center justify-center bg-zinc-200 rounded-b-lg dark:bg-zinc-900">
        <div class="navbar-start">
            <a href="{{ url('/') }}" class="btn btn-ghost text-xl">Home</a>
            <a href="{{ url('/about-me') }}" class="btn btn-ghost text-xl">About me</a>
        </div>
        <a href="{{ url('/') }}">
        <div class="navbar-center btn btn-ghost group">
            <x-svg.xicons.logo-black class="transition duration-200 w-12 h-12 group-hover:text-purple-700 dark:group-hover:text-purple-400"/>
            <a class="transition duration-200 font-semibold text-2xl group-hover:text-purple-700 dark:group-hover:text-purple-400">Iago Fariñas</a>
        </div>
        </a>
        <div class="navbar-end">
            @if(Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-ghost text-zinc-900 hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-100"><i class="fas fa-home"></i> Dashboard</a>
                @else
                    <a href="{{ url('/dashboard') }}" class="btn btn-ghost text-zinc-900 hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-100"><i class="fa-solid fa-arrow-right-to-bracket"></i> Log in</a>
                @endauth
            @endif
        </div>
    </div>

    <div class="relative flex justify-center items-top min-h-screen py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="z-0 flex justify-center mt-8 sm:justify-start sm:mt-0">
                <h1 class="transition duration-300 z-0 mt-10 mb-8 ml-4 text-6xl font-extrabold text-center text-black dark:text-white hover:text-purple-700 dark:hover:text-indigo-600" style="font-family: 'gg sans', 'Noto Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;">About</h1>
            </div>
            <div class="mt-8 overflow-hidden bg-zinc-200 shadow-2xl dark:shadow-xl dark:shadow-white/15 rounded-lg dark:bg-zinc-950/30 dark:border-black">
                <div class="p-6 group">
                    <div>
                        <div class="text-right">
                            <a class="btn btn-ghost">English</a>
                            <a class="btn btn-ghost">Español</a>
                        </div>
                        <p class="font-semibold mt-2 ml-6 text-sm transition duration-200 text-zinc-600 group-hover:text-zinc-700 dark:text-zinc-400 dark:group-hover:text-zinc-300">
                            W.I.P
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
