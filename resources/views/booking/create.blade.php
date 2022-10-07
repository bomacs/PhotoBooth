<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-2xl text-lgrey leading-tight">
            {{ __('Book Your Photographer') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-30 h-30 fill-current" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('storeBooking') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="contact_no" :value="__('Contact Number')" />

                <x-input id="contact_no" class="block mt-1 w-full" type="text" name="contact_no" :value="old('contact_no')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <!-- event_type -->
            <div class="mt-4">
                <x-label for="event_type" :value="__('Type of Event')" />

                <x-input id="event_type" class="block mt-1 w-full"
                                type="text"
                                name="event_type" :value="old('event_type')" required/>
            </div>

            <!-- event Place -->
            <div class="mt-4">
                <x-label for="event_place" :value="__('Place of Event')" />

                <x-input id="event_place" class="block mt-1 w-full"
                                type="text"
                                name="event_place" :value="old('event_place')" required />
            </div>
            
            <!-- Select option photographer-->
            <div class="mt-4">
                <x-label for="photographer" :value="__('Photographer')" />
                <select name="photographer" id="photographer" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value=""selected disabled>Select Photographer..</option>
                    @foreach ($photographers as $photographer)
                    <option value="{{$photographer->id}}">{{$photographer->name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- Date of event-->
            <div class="mt-4">
                <x-label for="event_date" :value="__('Date of Event')" />

                <x-input id="event_date" class="block mt-1 w-full"
                                type="date"
                                name="event_date" :value="old('event_date')" required />
            </div>
            <div class="w-full flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Book Now') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>


