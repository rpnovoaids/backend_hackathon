<?php

namespace App\Models\Inventory;

use App\Models\OptionsModel;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'brands_id',
        'active',
        'state',
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

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = OptionsModel::toUppercase($value);
    }

    public function setBrandsIdAttribute($value)
    {
        $this->attributes['brands_id'] = OptionsModel::getId($value);
    }

    /** Relationship */

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brands_id', 'id');
    }
}
