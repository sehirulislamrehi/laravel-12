<?php
declare(strict_types=1);

namespace App\Interfaces\Modules\UserModule\User;

use App\Models\UserModule\User;

interface ReadUserInterface
{
     public function getUserByEmail(string $email): ?User;
}