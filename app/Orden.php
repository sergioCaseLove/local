<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $table = 'ordenes';

    public function ordenid(){
        return $this->belongsTo('App\OrdenesId','orden_id');
    }
    public function usuario() {
        return $this->belongsTo('App\User','cliente_id');
    }
}
