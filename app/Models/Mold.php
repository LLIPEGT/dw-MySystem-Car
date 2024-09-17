<?php

namespace App\Models;

use App\Models\Brand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mold extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function car()
    {
        return $this->hasMany('App\Models\Car');
    }
}
