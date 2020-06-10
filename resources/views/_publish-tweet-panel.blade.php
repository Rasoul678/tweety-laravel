<div class="border border-blue-400 rounded-xl py-6 px-8 mb-8">
    <form method="POST" action="{{ route('tweets.store') }}">
        @csrf
        <textarea
            name="body"
            id="body"
            class="w-full p-2 @error('body') border border-red-500 rounded-xl @enderror"
            placeholder="What's up?"
            required
            autofocus
        ></textarea>
        @error('body')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <hr class="py-2">
        <footer class="flex justify-between">
            <img
                class="rounded-full mr-2"
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                width="50"
                height="50"
            >
            <button type="submit" class="bg-blue-500 rounded-xl shadow py-2 px-6 text-white hover:bg-blue-700">Publish</button>
        </footer>
    </form>
</div>
