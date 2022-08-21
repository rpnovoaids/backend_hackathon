<?php

namespace App\Models\Inventory;

use App\Models\OptionsModel;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TypeMeasure extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'type_measures';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = OptionsModel::toUppercase($value);
    }
}
