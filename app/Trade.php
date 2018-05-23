<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Trade
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $instrument_id
 * @property string $point
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Instrument $instrument
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereInstrumentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade wherePoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Trade whereUserId($value)
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
