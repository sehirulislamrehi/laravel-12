<?php

namespace App\Services\Backend\Modules\UserModule\Role;

use App\Interfaces\Modules\UserModule\Role\RoleInterface;
use App\Models\UserModule\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RoleService
{

     public function __construct(
          protected RoleInterface $roleRepository,
     ) {
          // You can add any initialization code here if needed
     }


     /**
      * Get all roles for the admin data table.
      *
      * @return Builder
      */
     public function getAllRoleForAdminDataTable(): Builder
     {
          return $this->roleRepository->getAllRoleForAdminDataTable();
     }

     /**
      * Create a new role.
      *
      * @param Request $request
      * @return Role
      */
     public function create(Request $request): Role
     {
          $data = (array) [
               'name' => $request->input('name'),
               'is_active' => true,
               'permissions' => $request->input('permissions', []), // Default to empty array if not provided
          ];
          $role = $this->roleRepository->create($data);
          return $role;
     }

     /**
      * Get a role by its ID.
      *
      * @param int $id
      * @return Role
      */
     public function getRoleById($id): Role
     {
          return $this->roleRepository->getRoleById($id);
     }

     /**
      * Update an existing role.,
      *
      * @param Role $role
      * @param Request $request
      * @return Role
      */
     public function update($role, Request $request): Role
     {
          $data = (array) [
               'name' => $request->input('name'),
               'is_active' => $request->input('is_active', false), // Default to false if not provided
               'permissions' => $request->input('permissions', []), // Default to empty array if not provided
          ];
          $this->roleRepository->update($role, $data);
          Cache::forget("role_{$role->id}_permissions");
          return $role;
     }
}
