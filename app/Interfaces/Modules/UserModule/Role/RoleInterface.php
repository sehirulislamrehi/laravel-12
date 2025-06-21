<?php

namespace App\Interfaces\Modules\UserModule\Role;

use App\Models\UserModule\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface RoleInterface
{
     
     public function getAllRoleForAdminDataTable(): Builder;
     public function create(array $data): Role;
     public function update($role, array $data): Role;
     public function getRoleById($id): Role;
     public function getAllRoles($status): Collection;

}