<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-3 text-white text-sm ml-2">
        {{ auth()->user()->following($user) ? "Unfollow Me" : "Follow Me" }}
    </button>
</form>
