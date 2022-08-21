<?php

namespace App\Models\Inventory;

use App\Models\OptionsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductPresentation extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'product_presentations';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id',
        'type_measures_id',
        'presentation',
        'bulk',
        'batch',
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

    public function setProductsIdAttribute($value)
    {
        $this->attributes['products_id'] = OptionsModel::getId($value);
    }

    public function setTypeMeasuresIdAttribute($value)
    {
        $this->attributes['type_measures_id'] = OptionsModel::getId($value);
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

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function typeMeasure()
    {
        return $this->belongsTo(TypeMeasure::class, 'type_measures_id', 'id');
    }
}
