<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label
                for="username"
                class="block mb-2 uppercase font-bold text-gray-700">
                Username
            </label>
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="username"
                id="username"
                value="{{ $user->username }}"
            >
            @error('username')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="name"
                class="block mb-2 uppercase font-bold text-gray-700">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                value="{{ $user->name }}"
            >
            @error('name')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="avatar"
                class="block mb-2 uppercase font-bold text-gray-700">
                Avatar
            </label>
            <div class="flex justify-between">
                <input
                    type="file"
                    class="border border-gray-400 p-2 w-full"
                    name="avatar"
                    id="avatar"
                >
                <img src="{{ $user->avatar }}" alt="Your avatar" width="50">
            </div>
            @error('avatar')
            <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="email"
                class="block mb-2 uppercase font-bold text-gray-700">
                Email
            </label>
            <input
                type="email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                value="{{ $user->email }}"
            >
            @error('email')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="block mb-2 uppercase font-bold text-gray-700">
                password
            </label>
            <input
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
                required
            >
            @error('password')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password_confirmation"
                class="block mb-2 uppercase font-bold text-gray-700">
                Password Confirmation
            </label>
            <input
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password_confirmation"
                id="password_confirmation"
                required
            >
            @error('password_confirmation')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Update</button>
        </div>

    </form>
</x-app>
