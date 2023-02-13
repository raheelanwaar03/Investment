<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesCollecator extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    function userFees()
    {
        return $this->hasOne('App\Models\User', 'user_id');
    }

}
