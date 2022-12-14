<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-30 h-30 fill-current" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            
            {{-- Select option role type --}}
            <div class="mt-4">
                <x-label for="role_id" :value="__('Registered as:')" />
                <select name="role_id" id="role_id" class="block mt-1 w-full border-dgrey focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value=""selected disabled>Select Role..</option>
                    <option value="user">User</option>
                    <option value="photographer">Photographer</option>
                </select>
            </div>

            <!--terms and conditions-->
            <div class="block mt-6">
                <label for="policy" class="inline-flex items-center">
                    <input id="policy" type="checkbox" name="policy" value="agree" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-600">
                        I accept the
                        <a href="{{ route('policies') }}" class="text-sm text-blue-600 hover:underline">Terms and Conditions</a>
                    </span>
                </label>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-dgrey hover:text-lgrey" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
