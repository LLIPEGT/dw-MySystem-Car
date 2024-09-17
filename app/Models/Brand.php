<?php

namespace App\Models;

use App\Models\Mold;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function mold()
    {
        return $this->hasMany('App\Models\Mold');
    }
}
