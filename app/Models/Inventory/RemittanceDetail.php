<?php

namespace App\Models\Inventory;

use App\Models\OptionsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RemittanceDetail extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'remittance_details';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'remittances_id',
        'products_id',
        'presentation',
        'bulk',
        'batch',
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

    public function setRemittancesIdAttribute($value)
    {
        $this->attributes['remittances_id'] = OptionsModel::getId($value);
    }

    public function setProductsIdAttribute($value)
    {
        $this->attributes['products_id'] = OptionsModel::getId($value);
    }

    public function setPresentationAttribute($value)
    {
        $this->attributes['presentation'] = OptionsModel::toUppercase($value);
    }

    public function setBatchAttribute($value)
    {
        $this->attributes['batch'] = OptionsModel::toUppercase($value);
    }

    /** Relationship */

    public function remittance()
    {
        return $this->belongsTo(Remittance::class, 'remittances_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
