<ul>
    <li><a class="font-bold text-lg mb-3 block" href="{{ route('home') }}">Home</a></li>
    <li><a class="font-bold text-lg mb-3 block" href="/explore">Explore</a></li>
    <li><a class="font-bold text-lg mb-3 block" href="{{ route('profile', auth()->user()) }}">Profile</a></li>
    <li>
        <a
            role="button"
            class="font-bold text-lg mb-3 block"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
