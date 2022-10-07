<div id="team" class="container mx-auto">
    <h1 class="text-gray-900 opacity-90 text-4xl text-center font-bold my-10">Our Photographers</h1>
    @include('partials._search')
    @if (count($photographers) <= 0)
        <div class="w-full mx-auto">
        <p class="text-4xl text-center font-bold">No photographers found!!</p>
        </div>
    @endif
    <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-6">
        @foreach($photographers as $photographer)
        <x-card>
        <x-profile-card :photographer="$photographer" />
        </x-card>
        @endforeach    
    </div>
</div>