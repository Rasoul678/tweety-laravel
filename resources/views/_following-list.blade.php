<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
    <li class="mb-3">
        <div class="flex items-center">
            <img class="rounded-full mr-2" src="{{ $user->avatar }}" alt="avatar">
            {{ $user->name }}
        </div>
    </li>
    @endforeach
</ul>
