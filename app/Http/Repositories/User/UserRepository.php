<?php
namespace App\Http\Repositories\User;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserRepository implements UserRepositoryInterface{
    public function index() : Collection{
        return User::with('roles')->get();
    }
    public function create() : Collection{
        return Role::all();
    }
    public function store(array $params){
        // dd($params);
        $role = Role::where('id',$params['role_id'])->first();
        $user = User::create([
            'name' => $params['name'],
            'email' => $params['email'],
            'password' => Hash::make($params['password'])
        ]);
        $user->assignRole($role);
        return $user;
    }
    public function destory(int $id)
    {
        $user = User::where('id',$id)->first();
        $user->roles()->detach();
        $user->delete();
        
    }
}