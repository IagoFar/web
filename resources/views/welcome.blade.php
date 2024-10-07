<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iago Fariñas - Developer</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @include('popper::assets')
        <meta charset="UTF-8">

    </head>
    <body class="antialiased transition duration-200 text-zinc-900 dark:text-zinc-100 dark:bg-zinc-900">
        <div class="navbar flex text-center justify-center bg-zinc-200 rounded-b-lg dark:bg-zinc-900">
            <div class="navbar-start">
                <a href="{{ url('/') }}" class="btn btn-ghost text-xl">Home</a>
                <a href="{{ url('/about-me') }}" class="btn btn-ghost text-xl">About me</a>
            </div>
            <div class="navbar-center">
                <a href="{{ url('/') }}" class="transition duration-200 btn btn-ghost font-semibold text-2xl hover:text-purple-700 dark:hover:text-purple-400">Iago Fariñas</a>
            </div>
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
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">
                <div class="z-0 flex justify-center mt-8 sm:justify-start sm:mt-0">
                    <h1 class="transition duration-300 z-0 mt-10 mb-8 ml-4 text-6xl font-extrabold text-center text-black dark:text-white hover:text-purple-700 dark:hover:text-indigo-600" style="font-family: 'gg sans', 'Noto Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;">Iago Fariñas</h1>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="mt-8 overflow-hidden bg-zinc-200 shadow-2xl dark:shadow-xl dark:shadow-white/15 rounded-lg dark:bg-zinc-950/30 dark:border-black">
                        <div class="p-6 group">
                            <div class="flex items-center">
                                <div class="text-lg font-semibold leading-7">
                                    <i class="mr-2 transition duration-200 fas fa-user group-hover:text-purple-400"></i>
                                    <span class="transition duration-200 text-zinc-900 dark:text-white group-hover:text-purple-500 dark:group-hover:text-purple-400">About Me</span>
                                </div>
                            </div>

                            <div class="mt-2 ml-6 text-sm transition duration-200 text-zinc-600 group-hover:text-zinc-700 dark:text-zinc-400 dark:group-hover:text-zinc-300">
                                <p class="font-semibold"> Programming lover and gaming enthusiast, Iago Fariñas excels in critical thinking and respects the perspectives of others. Proficient in JavaScript and Python, he enjoys helping people whenever they need support. His curiosity drives him to understand how everything works, whether it's code or the world around him. In his free time, he enjoys casual outdoor activities like biking and walking, which keep him balanced between his passion for technology and staying active.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 overflow-hidden bg-zinc-200 shadow-2xl dark:shadow-xl dark:shadow-white/15 rounded-lg dark:bg-zinc-950/30 dark:border-black">
                        <div class="p-6 group">
                            <div class="text-lg font-semibold leading-7">
                                <i class="mr-2 transition duration-200 fas fa-microchip group-hover:text-blue-500"></i>
                                <span class="transition duration-200 text-zinc-900 dark:text-white group-hover:text-blue-500">Technologies</span>
                            </div>
                            <div class="grid justify-center grid-cols-4 gap-4">
                                <span {{ Popper::placement('bottom', 'middle')->pop('Laravel') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-red-600/50">
                                    <x-devicon-laravel class="text-zinc-200 dark:text-zinc-900 hover:text-red-700"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('Php') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-blue-600/50">
                                    <x-devicon-php class="text-zinc-200 dark:text-zinc-900 hover:text-blue-700"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('Javascript') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-yellow-600/50">
                                    <x-devicon-javascript class="text-zinc-200 dark:text-zinc-900 hover:text-yellow-500"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('NodeJS') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-green-700/50">
                                    <x-devicon-nodejs class="text-zinc-200 dark:text-zinc-900 hover:text-green-700"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('C#') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-purple-700/50">
                                    <x-devicon-csharp class="text-zinc-200 dark:text-zinc-900 hover:text-purple-700"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('Python') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-blue-400/50">
                                    <x-devicon-python class="text-zinc-200 dark:text-zinc-900 hover:text-blue-400"/>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('Learning...') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-blue-400/50">
                                    <i class="fas fa-code text-xl text-zinc-200 dark:text-zinc-900 hover:text-indigo-400 "></i>
                                </span>
                                <span {{ Popper::placement('bottom', 'middle')->pop('Learning...') }} class="inline-flex items-center justify-center w-16 h-16 p-2 m-2 transition duration-200 ease-in-out rounded-lg bg-zinc-600 group-hover:bg-zinc-700 group-hover:dark:bg-zinc-200 hover:-transate-y-1 hover:scale-110 hover:shadow-blue-400/50">
                                    <i class="fas fa-code text-xl text-zinc-200 dark:text-zinc-900 hover:text-indigo-400 "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 overflow-hidden bg-zinc-200 shadow-2xl dark:shadow-xl dark:shadow-white/15 rounded-lg dark:bg-zinc-950/30 dark:border-black">
                    <div class="p-6 group">
                        <div class="text-lg font-semibold leading-7">
                            <i class="transition duration-200 fas fa-check-to-slot text-zinc-900 dark:text-white group-hover:text-green-700"></i>
                            <span class="transition duration-200 text-zinc-900 dark:text-white group-hover:text-green-700"> Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
