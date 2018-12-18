<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveStatus extends Model
{
    protected $table = 'leave_status';

    protected $fillable = [
        'name'
    ];
}
