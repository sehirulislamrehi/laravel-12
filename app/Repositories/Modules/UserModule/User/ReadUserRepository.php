<?php
declare(strict_types=1);

namespace App\Repositories\Modules\UserModule\User;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use App\Models\UserModule\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReadUserRepository implements ReadUserInterface{

     /**
      * Get user by email.
      *
      * @param string $email
      * @return User|null
      */
     public function getUserByEmail(string $email): ?User
     {
          return User::where('email', $email)->first();
     }

     public function getAllUserForAdminDataTable(Request $request): Builder
     {
          $query = User::query();
          return $query;
     }
}