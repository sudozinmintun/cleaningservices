<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.user.list', ['users' => $users]);
    }


    public function addedit($id = 0)
    {
        $user = [];
        if (!empty($id)) {
            $user = User::findOrFail($id);
        }
        $roles = \Spatie\Permission\Models\Role::all();
        return view('admin.user.addedit', ['id' => $id, 'user' => $user, 'roles' => $roles]);
    }

    public function add(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->assignRole($data['role']);

        return redirect()->route('admin.users')->with('success', 'User created');
    }

    

    public function edit(Request $request)
    {

        $data = $request->all();
        $request->validate([
            'name' => 'required',
        ]);

        $user = User::with('roles')->findOrFail($data['id']);

        $update_arr = [
            'name' => $data['name']
        ];
        if (!empty($data['password'])) {
            $update_arr['password'] = Hash::make($data['password']);
        }
        $user->update($update_arr);

        $user->removeRole($user->roles[0]->name);
        $user->assignRole($data['role']);

        return redirect()->route('admin.users')->with('success', 'User updated');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'User deleted');
    }
}
