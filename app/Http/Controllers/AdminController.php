<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function checkPermission($permission = false){
        if($permission){
            if(!Auth::id() or !Auth::user()->hasPermissionTo($permission)){
                abort(403);
            }
        }
    }
    public function hasPermission($permission){
        return Auth::user()->hasPermissionTo($permission);
    }
}
