<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $table ='contributors';

    protected $fillable = [
        'user_id',
         'needy_id'
        ];

    public function user(){
        return $this->belongsTo('App\User');

    }
    public function needy(){
        return $this->hasOne('App\Needy','needy_id');
    }
}
