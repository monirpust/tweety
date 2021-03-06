<x-app>
    <form action="{{$user->path()}}" method="post" enctype="multipart/form-data">
        @csrf

        @method("patch")

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
            Name
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" required>

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">


                <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="avatar">
                Avatar
                </label>
            <div class="flex">
                <input class="border border-grey-400 p-2 w-full" type="file" name="avatar" id="avatar" value="{{$user->avatar}}" required>

                <img src="{{$user->avatar}}" alt="your avatar" width="40">
            </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">
            Username
            </label>

            <input class="border border-grey-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required>

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
            Email
            </label>

            <input class="border border-grey-400 p-2 w-full" type="email" name="email" id="email" value="{{$user->email}}" required>

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
            password
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="password"  required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">
            confirm password
            </label>

            <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">

            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>

        </div>






    </form>
</x-app>
