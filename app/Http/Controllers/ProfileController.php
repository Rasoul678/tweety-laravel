<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        return view('profiles.show', [
            'user'=>$user,
            'tweets'=>$user->tweets()->paginate(5)
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('edit', $user);

        $attributes = request()->validate([
            'username'=>['required', 'string', 'max:255', Rule::unique('users')->ignore($user), 'alpha_dash'],
            'name'=>['required', 'string', 'max:255'],
            'avatar'=>['file'],
            'email'=>['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password'=>['required', 'string', 'min:8', 'max:255', 'confirmed']
        ]);

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
