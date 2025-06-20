<?php

namespace App\Http\Controllers\Backend\Modules\UserModule\User;

use App\Http\Controllers\Controller;
use App\Services\Backend\Datatables\Modules\UserModule\User\UserDatatableService;
use App\Services\Backend\Modules\UserModule\User\UserService;
use App\Traits\Modules\ApiResponseTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use ApiResponseTrait;

    public function __construct(
        protected UserService $userService,
        protected UserDatatableService $userDatatableService
    )
    {
        // You can add middleware or other initializations here if needed
    }

    public function index(): View
    {
        try {
            return view('backend.modules.user_module.user.index');
        } catch (Exception $e) {
            return view('errors.500', [
                'message' => $e->getMessage()
            ]);
        }
    }


    public function data(Request $request): JsonResponse
    {
        try {
            $data = $this->userService->getAllUserForAdminDataTable($request);
            return $this->userDatatableService->makeTable($data);
        } catch (Exception $e) {
            return $this->response(
                status: 'error',
                data: [],
                message: $e->getMessage(),
                code: 500
            );
        }
    }
}
