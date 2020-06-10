<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
    <li class="mb-3">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center">
                <img
                    class="rounded-full mr-2"
                    src="{{ $user->avatar }}"
                    alt="avatar"
                    width="40"
                    height="40"
                >
                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
        <li class="p-4">No Friends yet!</li>
    @endforelse
</ul>
