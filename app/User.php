<?php

namespace App;




use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as AuthUser;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable

{    protected $table ='users';
    
    protected $fillable = [
        'name',
        'phone',
        'address',
        'province' ,
        'password',
        'is_admin',
        'is_needy_or_contributor'
    ];
    public function needy(){
        return $this->hasOne('App\Needy','user_id');
    }
    public function contributor(){
        return $this->hasMany('App\Contributor','user_id');
    }
    
    

}
