@props(['photographer'])
<article class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5">
        <div>
            <img src="{{asset('images/avatar1.png')}}" alt="Blog Post illustration" class="rounded-xl mx-auto">
         </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="mt-4">
                    <h3 class="text-2xl font-bold">
                        <a class="p-2 text gray-900 hover:text-gray-500" href="/photographers/{{ $photographer->id }}">{{ $photographer->name}}</a>
                    </h3>
                </div>
                <div class="mt-2">
                    <a href="#"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold ml-2"
                        style="font-size: 10px">Photographer Experience</a>
                    <span class="m-2 block text-gray-600 text-xs">
                        Joined <time>{{ $photographer->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            {{-- <div class="text-lg my-4">
                <p>Bio</p>
                <p class="text-xs">{{$photographer->bio}}</p>
            </div>
            <div class="text-lg mb-4">
                <p>Expertise</p>
                <x-expertise-card :photographer="$photographer" />
            </div> --}}
            <footer class="flex justify-between items-center mt-8">
                {{-- <div class="flex items-center text-sm">
                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">Lary Laracore</h5>
                        <h6>Mascot at Laracasts</h6>
                    </div>
                </div> --}}
                <div>
                    <a href="/photographers/{{ $photographer->id }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-500 rounded-full ml-2 py-2 px-8"
                    >View More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
