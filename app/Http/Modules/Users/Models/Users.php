<?php

namespace App\Http\Modules\Users\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';
    protected $fillable = array('id', 'name', 'email', 'password');

    public static function getAll(){
        return Users::first();
    }
}
