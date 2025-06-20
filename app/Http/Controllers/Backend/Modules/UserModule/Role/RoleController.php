<?php

namespace App\Http\Controllers\Backend\Modules\UserModule\Role;

use App\Http\Controllers\Controller;
use App\Services\Backend\Datatables\Modules\UserModule\Role\RoleDatatableService;
use App\Services\Backend\Modules\UserModule\Module\ModuleService;
use App\Services\Backend\Modules\UserModule\Role\RoleService;
use App\Traits\Modules\ApiResponseTrait;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    use ApiResponseTrait;

    public function __construct(
        protected RoleService $roleService,
        protected RoleDatatableService $roleDatatableService,
        protected ModuleService $moduleService
    ) {}

    /**
     * Display the user index view.
     *
     * @return View
     */
    public function index(): View
    {
        try {
            if (can("manage_role")) {
                return view('backend.modules.user_module.role.index');
            } else {
                return view('errors.403');
            }
        } catch (Exception $e) {
            return view('errors.500', [
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Get user data for the admin data table.
     *
     * @return JsonResponse
     */
    public function data(): JsonResponse
    {
        try {
            if(can("manage_role")) {
                $data = $this->roleService->getAllRoleForAdminDataTable();
                return $this->roleDatatableService->makeTable($data);
            } else {
                return $this->response(
                    status: 'error',
                    data: [],
                    message: 'You do not have permission to manage roles.',
                    code: 403
                );
            }
        } catch (Exception $e) {
            return $this->response(
                status: 'error',
                data: [],
                message: $e->getMessage(),
                code: 500
            );
        }
    }


    public function createModal(): View
    {
        try {
            if (can("manage_role")) {
                $modules = $this->moduleService->getAllModule();
                return view('backend.modules.user_module.role.modals.create',[
                    'modules' => $modules
                ]);
            } else {
                return view('errors.modals.403');
            }
        } catch (Exception $e) {
            return view('errors.500', [
                'message' => $e->getMessage()
            ]);
        }
    }

}