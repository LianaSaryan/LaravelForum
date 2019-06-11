<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\UserDeleted;

class UsersController extends Controller
{
	public function index()
    {
        $users = \App\User::all();

        return view('users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user)
    {
        $user->update(request()->validate([
            'username' => ['required', 'min:3'],
            'biography' => ['max: 255'],
        ]));

        return redirect('/profile');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        \Mail::to($user->email)->send(

            new UserDeleted($user)
        );

        $user->delete();

        return redirect('/users');
    }


    public function profile()
    {
        $user = auth()->user();

        return view('users.profile', compact('user'));
    }

    public function setRole($id)
    {
        $user = \App\User::find($id);

        $user-> isAdmin(request()->has('isAdmin'));

        return back();
    }
}
