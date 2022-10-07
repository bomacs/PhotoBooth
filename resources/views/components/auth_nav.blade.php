<nav class="flex justify-between items-center bg-dgrey pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto w-full z-20 top-0 border-b border-dgrey">
    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">   
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <x-application-logo class="p-2 font-bold text-3xl block w-auto fill-current hover:bg-lgrey rounded-lg" />
                </div>            
            </div>
            <ul class="shrink-0 flex items-center space-x-6">
                @if (Route::has('login'))
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium bg-lgrey rounded hover:text-gray-800 hover:bg-lgrey hover:border-dgrey focus:outline-none focus:text-dgrey focus:bg-lgrey focus:border-dgrey transition duration-150 ease-in-out p-2">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-nav-link :href="route('myprofile')">
                                    {{ __('My Profile') }}
                            </x-dropdown-link>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Login') }}
                    </x-nav-link>
                    @if (Route::has('register'))
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link>
                    @endif
                @endauth
                @endif
            </ul>
            <!-- Hamburger -->
            <div class="mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-lgrey focus:text-dgrey transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>