<?php

namespace App\Repositories\Modules\UserModule\Role;

use App\Interfaces\Modules\UserModule\Role\RoleInterface;
use App\Models\UserModule\Role;
use Illuminate\Database\Eloquent\Builder;

class RoleRepository implements RoleInterface
{
    
     public function getAllRoleForAdminDataTable(): Builder
     {
          $query = Role::query();
          return $query;
     }
}