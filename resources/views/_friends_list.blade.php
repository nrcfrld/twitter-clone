<div id="friendlist" class="mt-4 bg-gray-200 rounded-lg ">
    <h3 class="font-bold text-xl font-extrabold border-b border-gray-400 px-6 py-3">Friends</h3>
    <ul>
        @foreach(range(106,113) as $index)
        <li class="px-6 py-3 {{ $index == 113 ? : 'border-b border-gray-400' }}">
            <div class="flex items-center">
            <img src="https://picsum.photos/id/{{ $index }}/40.webp" alt="John Doe" class="w-10 h-10 rounded-full mr-2">
                <span>Eren Jaeger</span>
            </div>
        </li>
        @endforeach
    </ul>
</div>