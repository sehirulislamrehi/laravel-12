<?php

namespace App\DTO\Modules\UserModule\User;

use App\Http\Requests\Backend\UserModule\User\CreateUserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CreateUserDTO
{

    /**
     * CreateUserDTO constructor.
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @param string $phone
     * @param string $roleId
     * @param bool $isSuperAdmin
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public string $phone,
        public string $roleId,
        public bool $isSuperAdmin,
    ) {}

    /**
     * Create a new instance from the request.
     *
     * @param CreateUserRequest $request
     * @return self
     */
    public static function fromRequest(CreateUserRequest $request): self
    {
        return new self(
            name: $request->input('name'),
            email: $request->input('email'),
            password: Hash::make($request->input('password')), // hash if required
            phone: $request->input('phone'),
            roleId: (int) $request->input('role_id'),
            isSuperAdmin: (bool) $request->input('is_super_admin', false),
        );
    }

    /**
     * Convert the DTO to an array representation.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'phone' => $this->phone,
            'role_id' => $this->roleId,
            'is_super_admin' => $this->isSuperAdmin,
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
