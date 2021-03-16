<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        // dd(request('avatar'));

        $attributes = request()->validate([
            'name' => [
                'string',
                'required', '
                max:255'
            ],
            'avatar' => [
                'required',
                'file'
            ],
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],

            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user)],

            'password' => [
                'string',
                'required',
                'min:8',
                'confirmed'
            ]



        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');
        $user->update($attributes);

        return redirect($user->path());
    }
}
