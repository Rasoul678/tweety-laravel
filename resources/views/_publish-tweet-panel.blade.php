<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            id="body"
            class="w-full p-2 @error('body') border border-red-500 rounded-lg @enderror"
            placeholder="What's up?"
        ></textarea>
        @error('body')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
        <hr class="py-2">
        <footer class="flex justify-between">
            <img class="rounded-full mr-2" src="{{ auth()->user()->avatar }}" alt="avatar">
            <button type="submit" class="bg-blue-500 rounded-lg shadow p-3 text-white">Tweet-a-roo!</button>
        </footer>
    </form>
</div>
