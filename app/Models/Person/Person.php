<?php

namespace App\Models\Person;

use App\Models\OptionsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kind_person',
        'identification_types_id',
        'identification_number',
        'name',
        'first_surname',
        'second_surname',
        'business_name',
        'birthday',
        'gender',
        'address',
        'first_phone',
        'second_phone',
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

    public function setIdentificationTypesIdAttribute($value)
    {
        $this->attributes['identification_types_id'] = OptionsModel::getId($value);
    }

    public function setIdentificationNumberAttribute($value)
    {
        $this->attributes['identification_number'] = OptionsModel::toTrim($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = OptionsModel::toUppercase($value);
    }

    public function setFirstSurnameAttribute($value)
    {
        $this->attributes['first_surname'] = OptionsModel::toUppercase($value);
    }

    public function setSecondSurnameAttribute($value)
    {
        $this->attributes['second_surname'] = OptionsModel::toUppercase($value);
    }

    public function setBusinessNameAttribute($value)
    {
        $this->attributes['business_name'] = OptionsModel::toUppercase($value);
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = OptionsModel::toUppercase($value);
    }

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = OptionsModel::toDate($value);
    }

    public function setFirstPhoneAttribute($value)
    {
        $this->attributes['first_phone'] = OptionsModel::toTrim($value);
    }

    public function setSecondPhoneAttribute($value)
    {
        $this->attributes['second_phone'] = OptionsModel::toTrim($value);
    }

    /** Relationship */

    public function identificationType()
    {
        return $this->belongsTo(IdentificationType::class, 'identification_types_id', 'id');
    }
}
