<?php

namespace App\Models\Institution;

use App\Models\OptionsModel;
use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'persons_id',
        'level',
        'grade',
        'section',
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

    public function setLevelAttribute($value)
    {
        $this->attributes['level'] = OptionsModel::toUppercase($value);
    }

    public function setGradeAttribute($value)
    {
        $this->attributes['grade'] = OptionsModel::toUppercase($value);
    }

    public function setSectionAttribute($value)
    {
        $this->attributes['section'] = OptionsModel::toUppercase($value);
    }

    /** Relationship */

    public function person()
    {
        return $this->belongsTo(Person::class, 'persons_id', 'id');
    }
}
