<?php 
 namespace App\Http\Repositories\User;

use Illuminate\Support\Collection;

 interface UserRepositoryInterface{
    public function index() : Collection;
    public function create(): Collection;
    public function store(array $params);
    public function destory(int $id)
; }
?>