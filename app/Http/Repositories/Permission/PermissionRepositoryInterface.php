<?php

namespace App\Http\Repositories\Permission;

use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;

interface PermissionRepositoryInterface
{
    public function index() : Collection;
    public function store(array $params);
    public function edit(int $id) : Permission;
    public function update($id) : Permission;
    public function destory($id);
}
