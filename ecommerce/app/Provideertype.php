<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class provideertype extends Model
{
    //
    public function providers(){
        return $this->belongsTo('App\Providers');
}
