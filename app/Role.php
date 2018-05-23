<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @mixin \Eloquent
 */
class Role extends Model
{
    const ADMIN = 1;
    const USER_BASIC = 2;

    public function users(){
        return $this->hasMany(User::class)->select('id' , 'role_id', 'name' , 'last_name' , 'email' , 'picture');
    }
}
