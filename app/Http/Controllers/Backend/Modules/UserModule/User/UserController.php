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

    /**
     * UserController constructor.
     *
     * @param UserService $userService
     * @param UserDatatableService $userDatatableService
     */
    public function __construct(
        protected UserService $userService,
        protected UserDatatableService $userDatatableService
    )
    {
    }

    /**
     * Display the user index view.
     *
     * @return View
     */
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

    /**
     * Get user data for the admin data table.
     *
     * @param Request $request
     * @return JsonResponse
     */
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


    /**
     * Show the modal for creating a new user.
     *
     * @return View
     */
    public function createModal(): View
    {
        try {
            return view('backend.modules.user_module.user.modals.create');
        } 
        catch (Exception $e) {
            return view('errors.500', [
                'message' => $e->getMessage()
            ]);
        }
    }   


    public function create(Request $request): JsonResponse
    {
        try {
            $this->userService->createUser($request);
            return $this->response(
                status: 'success',
                data: [],
                message: 'User created successfully.',
                code: 200
            );
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
