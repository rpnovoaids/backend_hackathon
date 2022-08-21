<?php

namespace App\Models\Order;

use App\Models\OptionsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meter_types_id',
        'meter_number',
        'meter_status',
        'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [ ];

    public function setMeterTypesIdAttribute($value)
    {
        return $this->attributes['meter_types_id'] = OptionsModel::getId($value);
    }

    public function setMeterNumberAttribute($value)
    {
        $this->attributes['meter_number'] = OptionsModel::toTrim($value);
    }

    public function setMeterStatusAttribute($value)
    {
        $this->attributes['meter_status'] = OptionsModel::toUppercase($value);
    }

    /** Relationship */

    public function meterType()
    {
        return $this->belongsTo(MeterType::class, 'meter_types_id', 'id');
    }
}
