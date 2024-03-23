<?php

namespace App\Http\Repositories\Role;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    public function index()
    {
        return Role::with('permissions')->get();
    }
    public function create()
    {
        return Permission::with('permissions')->get();
    }
    public function store($params)
    {
        return Role::create($params);
    }
    public function destory($id)
    {
        Role::where('id',$id)->delete();
        
    }
}
