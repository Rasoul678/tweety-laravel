<div class="flex p-4 border-b border-b-gray-400">
    <div class="flex-shrink-0 mr-2">
        <img class="rounded-full mr-2" src="{{ $tweet->owner->avatar }}" alt="avatar">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->owner->name }}</h5>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
