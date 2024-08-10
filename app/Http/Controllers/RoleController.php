<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\Http\Requests\UpdateRole;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = \Spatie\Permission\Models\Role::all();

        return view('admin.role.index', ['roles' => $roles]);
    }

    public function create()
    {
        $permissions = \Spatie\Permission\Models\Permission::all();
        return view('admin.role.add', ['permissions' => $permissions]);
    }

    public function store(StoreRole $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        $role->givePermissionTo($request->permissions);
        return redirect()->route('role.index')->with('success', 'Your processing has been completed.');
    }


    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $old_permissions = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::all();
        return view('admin.role.edit', compact('role', 'old_permissions', 'permissions'));
    }

    public function update(UpdateRole $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->update();
        $old_permissions = $role->permissions->pluck('name')->toArray();
        $role->revokePermissionTo($old_permissions);
        $role->givePermissionTo($request->permissions);

        return redirect()->route('role.index')->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back()->with('success', 'Role is successfully deleted.');
    }
}
