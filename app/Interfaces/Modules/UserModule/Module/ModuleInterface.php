<?php

namespace App\Interfaces\Modules\UserModule\Module;

use Illuminate\Database\Eloquent\Builder;

interface ModuleInterface{
     public function getAllModule(): Builder;
}