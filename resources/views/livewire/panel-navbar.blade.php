<div class="navbar bg-white dark:bg-gray-800 shadow">
    <div class="navbar-start">
        <a href="{{ url('/dashboard') }}" class="btn btn-ghost text-xl">Home</a>
        <div class="dropdown dropdown-hover">
            <div tabindex="0" role="button" class="btn btn-ghost m-1">Portfolio control</div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a>About me modification</a></li>
                <li><a>Projects control</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a href="{{ url('/') }}" class="btn btn-ghost text-2xl text-indigo-700 dark:text-indigo-400 font-extrabold">X341</a>
    </div>
    <div class="navbar-end ">
        <ul class="menu menu-horizontal px-1">
            <li>
                <details>
                    <summary>{{ $user->name }}</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a href="{{ route('profile.show') }}">Settings</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    Log out
                                </a>
                            </form>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>
