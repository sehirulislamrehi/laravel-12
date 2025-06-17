<?php

namespace App\Http\Controllers\Backend\Modules\UserModule\User;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(): View
    {
        try{
            return view('backend.modules.user_module.user.index');
        }
        catch (Exception $e){
            return view('errors.500', [
                'message' => $e->getMessage()
            ]);
        }
    }

}
