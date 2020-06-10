<x-app>
    <div class="grid grid-cols-3 gap-2">
        @foreach($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center">
                <img
                    class="rounded-xl p-4 mr-2"
                    src="{{ $user->avatar }}"
                    alt="{{ $user->username }}'s avatar"
                    width="100"
                >
                <p class="font-bold">
                    {{ '@' . $user->username }}
                </p>
            </a>
        @endforeach
        {{ $users->links() }}
    </div>
</x-app>
