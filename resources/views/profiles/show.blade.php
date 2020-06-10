<x-app>
    <header class="mb-6 relative">
        <div class="h-48 overflow-y-hidden rounded-lg mb-2">
            <img class="w-full" src="{{ asset('/images/profile-banner.jpg') }}" alt="profile">
        </div>
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="bg-gray-300 rounded-full border border-gray-400 py-2 px-3 text-sm">Follow Me</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-3 text-white text-sm ml-2">Edit Profile</a>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus eos esse labore nihil
            officiis! Accusamus adipisci, cum earum et odit officiis quod ratione saepe sapiente soluta velit,
            veniam.
        </p>
        <img
            class="rounded-full mr-2 absolute"
            src="{{ $user->avatar }}"
            alt="avatar"
            style="left: calc(50% - 100px); top:23%"
        >
    </header>
    @include('_timeline', ['tweets'=>$user->tweets])
</x-app>
