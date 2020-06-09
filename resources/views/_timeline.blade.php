<div class="bg-gray-100 border border-gray-300 rounded-xl">
    @foreach($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>
