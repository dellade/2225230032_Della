<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    public function create()
    {
        return view('add-data');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:users',
        ]);

        User::create([
            'name' => $request->name,
            'nim' => $request->nim,
        ]);

        return redirect()->route('user')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return view('user-edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:users,nim,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'nim' => $request->nim,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}