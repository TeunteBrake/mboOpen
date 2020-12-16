<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanenReserveringen extends Model
{
    protected $table = 'banenreserveringen';

    public function baan()
    {
        return $this->hasOne('App\Banen', 'id', 'baanID');
    }

    public function lid()
    {
        return $this->hasOne('App\User', 'id', 'userID');
    }
}
