<div class="flex mt-3">
    <form method="POST" action="/tweets/ {{ $tweet->id }}/like">
        @csrf
        <div class="mr-4 {{ $tweet->isLikedBy(current_user()) ? "text-blue-500" : '' }}">
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            <button type="submit" class="text-sm">
                {{ $tweet->likes ?: 0}}
            </button>
        </div>
    </form>
    <form method="POST" action="/tweets/{{ $tweet->id }}/like">
        @csrf
        @method('DELETE')
        <div class="{{ $tweet->isDisLikedBy(current_user()) ? "text-red-500" : '' }}">
            <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
            <button type="submit" class="text-sm">
                {{ $tweet->dislikes ?: 0}}
            </button>
        </div>
    </form>
</div>
