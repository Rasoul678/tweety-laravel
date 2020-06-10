<div class="bg-gray-100 border border-gray-300 rounded-xl">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet!</p>
    @endforelse
</div>
{{ $tweets->links() }}
