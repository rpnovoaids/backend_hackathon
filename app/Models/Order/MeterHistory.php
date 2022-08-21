<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterHistory extends Model
{
    use HasFactory;

    protected $table = 'meter_history';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplies_id',
        'meters_id',
        'instalation_date',
        'uninstall_date'
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

    public function setSuppliesIdAttribute($value)
    {
        return $this->attributes['supplies_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setMetersIdAttribute($value)
    {
        return $this->attributes['meters_id'] = !empty($value['id']) ? $value['id'] : $value;
    }
}
