<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $table = 'user_status';

    protected $fillable = [
        'user_id','status_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function status(){
        return $this->belongsTo('App\Status', 'status_id');
    }
}
