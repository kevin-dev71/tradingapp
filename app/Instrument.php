<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Instrument
 *
 * @mixin \Eloquent
 */
class Instrument extends Model
{
    public function trades(){
        return $this->hasMany(Trade::class)->select('id' , 'user_id', 'instrument_id' , 'point');
    }
}
