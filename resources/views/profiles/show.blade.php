<x-app>
    <header class="mb-6 relative">
        <div class="h-56 overflow-y-hidden rounded-lg mb-2 relative">
            <img class="w-full" src="{{ asset('/images/profile-banner.jpg') }}" alt="profile">
            <img
                class="rounded-full mr-2 absolute top-0 transform -translate-x-1/2 translate-y-3"
                src="{{ $user->avatar }}"
                alt="avatar"
                style="left: 50%;"
                width="200"
            >
        </div>
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit' , $user)
                    <a href="{{ $user->path('edit') }}" class="bg-gray-300 rounded-full border border-gray-400 py-2 px-3 text-sm">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dolorem doloribus eos esse labore nihil
            officiis! Accusamus adipisci, cum earum et odit officiis quod ratione saepe sapiente soluta velit,
            veniam.
        </p>

    </header>
    @include('_timeline', ['tweets'=>$user->tweets])
</x-app>
