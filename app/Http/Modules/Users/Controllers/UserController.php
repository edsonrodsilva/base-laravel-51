<?php

namespace App\Http\Modules\Users\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Modules\Users\Models\Users;

class UserController extends Controller
{
    public function showIndex(){
        return Users::getAll();
    }
}
