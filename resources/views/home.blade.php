@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1 lg:mx-10">
            @include('_publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
            </div>
        </div>
        <div class="lg:w-1/6 bg-blue-200 rounded-lg p-4">
            @include('_friends-list')
        </div>
    </div>
@endsection
