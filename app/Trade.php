<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Trade
 *
 * @mixin \Eloquent
 */
class Trade extends Model
{
    /**
     * @return $this
     */
    public function instrument(){
        return $this->belongsTo(Instrument::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
