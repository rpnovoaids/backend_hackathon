<?php

namespace App\Models\Inventory;

use App\Models\OptionsModel;
use App\Models\Security\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Remittance extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'providers_id',
        'remittance_date',
        'start_period',
        'end_period',
        'remittance_number',
        'type_care',
        'care_days',
        'number_users',
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

    public function setProvidersIdAttribute($value)
    {
        $this->attributes['providers_id'] = OptionsModel::getId($value);
    }

    public function setTypeCareAttribute($value)
    {
        $this->attributes['type_care'] = OptionsModel::toUppercase($value);
    }

    /** Relationship */

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'providers_id', 'id');
    }
}
