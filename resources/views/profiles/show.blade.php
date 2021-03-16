<x-app>
    <header class="mb-6 relative">
        <div>
            <img class="mb-2" src="/img/default-profile-banner.jpg" alt="">

            <img class=" rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%; width:150px; top:15%;" src="{{$user->avatar}}" alt="your avatar">
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-xl">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    <a class="rounded-full border border-gray-300 shadow py-2 px-2 text-black mr-2" href="{{$user->path("edit")}}">Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>



        <p class="text-sm mt-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
    </header>


    @include('_timeline', [
        'tweets'=> $user->tweets
    ])
</x-app>
