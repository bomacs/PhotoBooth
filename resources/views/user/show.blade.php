<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-lgrey leading-tight">
            Welcome back {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    This is your profile! <br>
                    Your id is {{ $user->id }} <br>
                    Your email is {{ $user->email }}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>