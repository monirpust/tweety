
    <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
        <form action="/tweet" method="POST">
            @csrf
            <textarea name="body" id="" cols="30" class="w-full" placeholder="What's up bro?"></textarea>
            <hr class="my-4">

            <footer class="flex justify-between">
                <img src="{{auth()->user()->avatar}}" alt="your avatar" class="rounded-full mr-2">
                <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">tweet now</button>
            </footer>

        </form>

        @error('body')
            <p class="text-sm text-red-500 py-2">{{$message}}</p>
        @enderror
    </div>
