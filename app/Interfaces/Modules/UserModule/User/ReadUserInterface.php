<?php

namespace App\Interfaces\Modules\UserModule\User;

use Illuminate\Database\Eloquent\Builder;

interface ReadUserInterface
{
     public function getUserByEmail(string $email);
}