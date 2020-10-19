<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Needy extends Model
{
    protected $table ='needies';
    
    protected $fillable = [
        'user_id',
        'what_you_need',
        'photo',
        'donation_status',
        'admin_approval' ,
       
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function contributor(){
        return $this->belongsTo('App\Contributor');
    }

}
