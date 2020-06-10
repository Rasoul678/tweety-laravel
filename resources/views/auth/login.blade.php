<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-10 py-6 bg-gray-300 border border-gray-400 rounded-xl">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label
                            for="email"
                            class="block mb-2 uppercase font-bold text-gray-700"
                        >{{ __('E-Mail') }}</label>
                        <input
                            id="email"
                            type="email"
                            class="border border-gray-400 p-2 w-full @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus>
                        @error('email')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label
                            for="password"
                            class="block mb-2 uppercase font-bold text-gray-700"
                        >{{ __('Password') }}</label>
                        <input
                            id="password"
                            type="password"
                            class="border border-gray-400 p-2 w-full @error('password') is-invalid @enderror"
                            name="password"
                            required
                            autocomplete="current-password">

                        @error('password')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <input
                            class="mr-1"
                            type="checkbox"
                            name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label
                            class="uppercase font-bold text-gray-700"
                            for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="flex items-center">
                        <button type="submit"
                                class="px-6 py-3 rounded text-sm uppercase bg-blue-400 text-white mr-4">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="font-bold text-gray-700" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
