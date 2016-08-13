<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenesId extends Model
{
    //
    protected $table = 'ordenesid';
    public function orden() {
        return $this->hasMany('App\Orden');
    }
}
