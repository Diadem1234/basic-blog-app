<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:' . implode(',', array_keys(config('enums.roles'))),
        ]);
    
        // Hash the password before storing
        $validatedData['password'] = bcrypt($request->password);
    
        User::create($validatedData);
    
        return redirect()->route('admin.users.index')->with('success', 'User created successfully!');
    }
    
    

    public function show(User $user)
    {
        // dd($user);
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);
    
        $data = $request->only(['name', 'email', 'role']); // Only update these fields initially
    
        if ($request->filled('password')) {
            if($request->password != $user->password){
                $data['password'] = bcrypt($request->password);
            }
        }
     
        $user->update($data);
    
        return redirect()->route('admin.users.index')->with('success', 'Updated successfully.');
    }
    
    public function confirm_delete(User $user){

        return view('admin.users.delete', compact('user'));
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted.');
    }
}

