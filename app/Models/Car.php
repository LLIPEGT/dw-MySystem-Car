<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;

    use SoftDeletes;

    public function color()
    {
        return $this->belongsTo('App\Models\Color');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function mold()
    {
        return $this->belongsTo('App\Models\Mold');
    }
}
