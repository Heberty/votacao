<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function count()
    {
        return $this->belongsTo('App\Models\Count');
    }
}
