<nav class="container-fluid mx-auto bg-white p-4 shadow-md flex items-center justify-between">
    <a href="{{ url('/') }}">
        <span class="font-black text-3xl">UNBC</span>
    </a>
    <div>
        <ul class="flex items-center space-x-4">
            @guest
                @if (Route::has('login'))
                    <li class="text-gray-800">
                        <a href="{{ route('login') }}" class="hover:bg-indigo-500 hover:text-white hover:font-bold hover:p-2 hover:rounded-md transition-all ease-in-out">{{ __('Login') }}</a>
                    </li>
                @endif
                {{-- @if (Route::has('register'))
                    <li class="text-gray-800">
                        <a href="{{ route('register') }}" class="hover:bg-indigo-500 hover:text-white hover:font-bold hover:p-2 hover:rounded-md transition-all ease-in-out">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
                <li>
                    <a id="navbarDropdown" class="bg-indigo-500 p-2 rounded-md" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="text-white">Bienvenid@&nbsp;{{ Auth::user()->name }}</span>
                    </a>
                </li>
                <a class="hover:bg-red-500 hover:text-white hover:font-bold hover:p-2 hover:rounded-md transition-all ease-in-out duration-500" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</nav>
