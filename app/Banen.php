<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banen extends Model
{
    protected $table = 'banen';

    protected $fillable = ['soort'];

    public function reserveringen()
    {
        return $this->hasMany('App\BanenReserveringen', 'baanID', 'id');
    }
}
