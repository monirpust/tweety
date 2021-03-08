<h3 class="font-bold text-xl mb-4">Follows</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-2">
            <div class="flex items-center text-sm">
                <img src="{{$user->avatar}}" alt="your avatar" class="rounded-full mr-2">
                {{$user->name}}
            </div>
        </li>
    @endforeach
</ul>
