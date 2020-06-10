<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex">
                @if(auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif
                <div class="lg:flex-1 lg:mx-10">
                    {{ $slot }}
                </div>
                @if(auth()->check())
                    <div class="lg:w-1/6 bg-blue-200 rounded-xl p-4">
                        @include('_following-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
