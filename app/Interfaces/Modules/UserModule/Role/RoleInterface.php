<?php

namespace App\Interfaces\Modules\UserModule\Role;

use Illuminate\Database\Eloquent\Builder;

interface RoleInterface
{
     
     public function getAllRoleForAdminDataTable(): Builder;

}