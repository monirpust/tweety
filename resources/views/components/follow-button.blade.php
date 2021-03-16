@if (current_user()->isNot($user))
    <form action="/profiles/{{ $user->name }}/follow" method="POST">
        @csrf
        <button type="submit" class="bg-blue-400 rounded-full shadow py-2 px-2 text-white">
            {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
        </button>
    </form>
@endif
