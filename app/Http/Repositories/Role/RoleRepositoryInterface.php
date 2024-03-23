<?php
namespace App\Http\Repositories\Role;
interface RoleRepositoryInterface {
    public function index();
    public function create();
    public function  store($params);
    public function destory($id);
}

?>