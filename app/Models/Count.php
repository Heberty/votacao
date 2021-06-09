<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    

    public function vote()
    {
        return $this->hasMany('App\Models\Vote');
    }
}
