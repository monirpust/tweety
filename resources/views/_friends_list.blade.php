<h3 class="font-bold text-xl mb-4">Follows</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-2">
            <div>
                <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
                    <img src="{{$user->avatar}}" alt="your avatar" class="rounded-full mr-2" height="40px" width="40px">
                    {{$user->name}}
                </a>
            </div>
        </li>
    @endforeach
</ul>
