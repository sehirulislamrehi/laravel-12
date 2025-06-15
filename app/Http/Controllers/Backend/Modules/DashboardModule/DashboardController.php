<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Modules\DashboardModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        return view('backend.modules.dashboard_module.index');
    }

}
