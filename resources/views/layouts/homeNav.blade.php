<nav x-data="{ open: false }" class="bg-dgrey pb-1">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:p-2">
        <div class="flex justify-between items-center h-12">
            <div class="flex ">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-nav-link href="#news">
                        {{ __('News') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-nav-link href="#gallery">
                        {{ __('Gallery') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-nav-link href="#plans">
                        {{ __('Plans') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-nav-link href="#team">
                        {{ __('Photographers') }}
                    </x-nav-link>
                </div>
                <div class="shrink-0 hidden space-x-8 sm:-my-px sm:ml-4 sm:flex">
                    <x-nav-link href="#aboutUs">
                        {{ __('About Us') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden z-10 sm:flex sm:items-center sm:inline-block sm:ml-6">
                @if (Route::has('login'))
                    <div class="hidden top-0 right-0 sm:block"> 
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-lgrey hover:text-dgrey hover:border-lgrey focus:outline-none focus:text-dgray focus:border-lgrey transition duration-150 ease-in-out">
                                    <x-nav-link class="underline">
                                        {{ Auth::user()->name }}
                                    </x-nav-link>
            
                                        <div class="ml-1">
                                            <svg class="text-gray-100 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
            
                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('myprofile')">
                                        {{ __('My Profile') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link href="#">
                                        {{ __('Help') }}
                                    </x-dropdown-link>
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
                @else       
                            <x-nav-link :href="route('login')" class="underline">
                                {{__('Log in')}}
                            </x-nav-link>
                            @if (Route::has('register'))
                            <x-nav-link :href="route('register')" class="underline">
                                {{__('Register')}}
                            </x-nav-link>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#news">
                {{ __('News') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#gallery">
                {{ __('Gallery') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#plans">
                {{ __('Plans') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#team">
                {{ __('Team') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#aboutUs">
                {{ __('About Us') }}
            </x-responsive-nav-link>
        </div>
            @if (Route::has('login'))
                @auth
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <x-responsive-nav-link :href="route('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link :href="route('myprofile')">
                                {{ __('My Profile') }}
                            </x-responsive-nav-link>
                            <x-responsive-nav-link href="#">
                                {{ __('Help') }}
                            </x-responsive-nav-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
            @else
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Log in') }}
                    </x-responsive-nav-link>
                    @if (Route::has('register'))
                        <x-responsive-nav-link :href="route('register')">
                            {{ __('Register') }}
                        </x-responsive-nav-link>
                    @endif
                @endauth
            @endif
    </div>
</nav>
