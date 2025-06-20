<?php

namespace App\Services\Backend\Modules\UserModule\Role;

use App\Interfaces\Modules\UserModule\Role\RoleInterface;
use Illuminate\Database\Eloquent\Builder;

class RoleService{

     public function __construct(
          protected RoleInterface $readRoleRepository,
     )
     {
          // You can add any initialization code here if needed
     }


     /**
      * Get all roles for the admin data table.
      *
      * @return Builder
      */
     public function getAllRoleForAdminDataTable(): Builder
     {
          return $this->readRoleRepository->getAllRoleForAdminDataTable();
     }

}