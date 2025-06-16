<?php

namespace App\Interfaces\Modules\UserModule\User;

use App\Models\User;

interface ReadUserInterface
{
     public function getUserByEmail(string $email): ?User;
}