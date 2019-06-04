<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function index()
    {
        $user = auth()->user();

        return view('users.index', compact('user'));
    }

    public function show(User $user)
    {
    	//dd('hello');
    	//return view('users.show', compact('user'));
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

}
