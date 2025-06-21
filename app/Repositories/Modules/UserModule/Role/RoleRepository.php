<?php

namespace App\Repositories\Modules\UserModule\Role;

use App\Interfaces\Modules\UserModule\Role\RoleInterface;
use App\Models\UserModule\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class RoleRepository implements RoleInterface
{

     public function getAllRoleForAdminDataTable(): Builder
     {
          $query = Role::query();
          return $query;
     }

     public function create(array $data): Role
     {
          return DB::transaction(function () use ($data) {
               $role = Role::create($data);
               if (!empty($data['permissions'])) {
                    $role->permissions()->sync($data['permissions']);
               }

               return $role;
          });
     }

     public function getRoleById($id): Role
     {
          return Role::where("id", $id)->with("permissions")->first();
     }

     public function update($role, array $data): Role
     {
          return DB::transaction(function () use ($role, $data) {
               $role->update($data);
               if (!empty($data['permissions'])) {
                    $role->permissions()->sync($data['permissions']);
               }

               return $role;
          });
     }
}
