<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesCollecator extends Model
{
    use HasFactory;

    function registerationFees()
    {
        return $this->hasOne('app\Models\User');
    }

}
