<?php

namespace App\Models\Security;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRol extends Model
{
    use HasFactory;

    protected $table = 'users_roles';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'roles_id'
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

    public function setUsersIdAttribute($value) {
        return $this->attributes['users_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setRolIdAttribute($value) {
        return $this->attributes['roles_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    /** Relationship */

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'roles_id', 'id');
    }
}
