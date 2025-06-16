<?php
declare(strict_types=1);

namespace App\Repositories\Modules\UserModule\User;

use App\Interfaces\Modules\UserModule\User\ReadUserInterface;
use App\Models\User;

class ReadUserRepository implements ReadUserInterface{

     public function getUserByEmail(string $email): ?User
     {
          return User::where('email', $email)->first();
     }
}