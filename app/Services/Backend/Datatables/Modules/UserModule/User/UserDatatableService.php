<?php

namespace App\Services\Backend\Datatables\Modules\UserModule\User;

use Illuminate\Http\JsonResponse;
use Yajra\DataTables\Facades\DataTables;

class UserDatatableService{

     public function makeTable($data): JsonResponse
     {
          return DataTables::of($data)
            ->rawColumns(['action', 'is_active'])
            ->addIndexColumn()
            ->editColumn('is_active', function ($data) {
               return '';
            })
            ->addColumn('action', function ($data) {
                
                return '<div class="dropdown mr-1">
                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false" data-offset="10,20">Action</button>
                <div class="dropdown-menu">

                    <a class="dropdown-item" style="cursor: pointer; text-align: left;" 
                    data-content="' . route('admin.user-module.user.update.modal', ['id' => $data->id]) . '" 
                    data-target="#largeModal" data-toggle="modal">
                        <i class="fa fa-edit"></i>
                        Edit
                    </a>

                </div>
            </div>';
            })
            ->make(true);
     }

}