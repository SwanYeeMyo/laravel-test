<?php

namespace App\Http\Repositories\Permission;

use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function index() : Collection
    {
        return Permission::all();
    }
    public function store(array $params)
    {
        return Permission::create([
            'name' => $params['permission']
        ]);
    }
    public function edit(int $id) : Permission
    {
        return Permission::where('id', $id)->first();
    }
    public function update($id): Permission
    {
        $request = Permission::where('id',$id)->first();
        return Permission::where('id',$id)->update([
            'name' => $request->permission
        ]);
    }
    public function destory($id)
    {
        return Permission::where('id', $id)->delete();
    }
}
