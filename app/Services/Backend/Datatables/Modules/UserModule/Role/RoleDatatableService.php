<?php

namespace App\Services\Backend\Datatables\Modules\UserModule\Role;

use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;

class RoleDatatableService
{

     public function makeTable($data): JsonResponse
     {
          return DataTables::of($data)
               ->rawColumns(['action', 'is_active'])
               ->addIndexColumn()
               ->editColumn('is_active', function ($data) {
                    if ($data->is_active) {
                         return '<span class="badge badge-success">Active</span>';
                    } else {
                         return '<span class="badge badge-danger">Inactive</span>';
                    }
               })
               ->addColumn('action', function ($data) {
                    $html = '';

                    $html .= '<button type="button" data-content="'. route('admin.user-module.role.update.modal', $data->id) .'" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#extraLargeModal">
                            <i class="fa fa-edit">
                        </button>';

                    return $html;
               })
               ->make(true);
     }
}
