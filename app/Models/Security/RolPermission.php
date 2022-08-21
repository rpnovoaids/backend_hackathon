<?php

namespace App\Models\Security;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolPermission extends Model
{
    use HasFactory;

    protected $table = 'rol_permissions';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roles_id',
        'permissions_id'
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

    public function setRolesIdAttribute($value) {
        return $this->attributes['roles_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    public function setPermissionsIdAttribute($value) {
        return $this->attributes['permissions_id'] = !empty($value['id']) ? $value['id'] : $value;
    }

    /** Relationship */

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'roles_id', 'id');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permissions_id', 'id');
    }
}
