<?php

namespace App\Models\Person;

use App\Models\OptionsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentificationType extends Model
{
    use HasFactory;

    protected $table = 'identification_types';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
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

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = OptionsModel::toUppercase($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = OptionsModel::toUppercase($value);
    }
}
