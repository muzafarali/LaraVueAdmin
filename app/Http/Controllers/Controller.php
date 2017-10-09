<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Validator;
use JWTAuth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * @var
     */
    public $roles;
    
    /**
     * @var
     */
    public $permissions;
    
    
    /**
     * Controller constructor.
     */
    public function __construct()
    {
        if (Auth::user()){
            
            $this->roles = Auth::user()->roles()->get()->pluck('name')->toJson();
            $this->permissions =  array_map(function ($permission) {
                return $permission['name'];
            }, Auth::user()->getAllPermissions()->toArray());
        }
    }
    
}
