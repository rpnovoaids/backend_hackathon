<?php

namespace App\Models\Order;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplie extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'persons_id',
        'supply_number',
        'services',
        'rates_id',
        'billing_types_id',
        'meters_id',
        'active',
        'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function setPersonsIdAttribute($value)
    {
        return $this->attributes['persons_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setSupplyNumberAttribute($value)
    {
        $this->attributes['supply_number'] = trim($value);
    }

    public function setServicesAttribute($value)
    {
        $this->attributes['services'] = trim($value);
    }

    public function setRatesIdAttribute($value)
    {
        return $this->attributes['rates_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setBillingTypesIdAttribute($value)
    {
        return $this->attributes['billing_types_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setMetersIdAttribute($value)
    {
        return $this->attributes['meters_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    /** Relationship */

    public function person()
    {
        return $this->belongsTo(Person::class, 'persons_id', 'id');
    }

    public function rate()
    {
        return $this->belongsTo(Rate::class, 'rates_id', 'id');
    }

    public function billingType()
    {
        return $this->belongsTo(BillingType::class, 'billing_types_id', 'id');
    }

    public function meter()
    {
        return $this->belongsTo(Meter::class, 'meters_id', 'id');
    }
}
