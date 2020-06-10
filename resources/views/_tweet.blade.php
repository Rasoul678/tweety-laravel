<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="flex-shrink-0 mr-2">
        <a href="{{ route('profile', $tweet->owner) }}">
            <img
                class="rounded-full mr-2"
                src="{{ $tweet->owner->avatar }}"
                alt="avatar"
                width="50"
                height="50"
            >
        </a>
    </div>
    <div>
        <a href="{{ route('profile', $tweet->owner) }}">
            <h5 class="font-bold mb-4">{{ $tweet->owner->name }}</h5>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
