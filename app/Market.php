<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Market
 *
 * @mixin \Eloquent
 */
class Market extends Model
{
    public function instruments(){
        return $this->hasMany(Instrument::class)->select('id' , 'market_id', 'name' , 'description' , 'tick_size' , 'point_value' , 'created_at');
    }
}
