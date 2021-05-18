<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class ColorProduct extends Model
{
    protected $table = 'color_product';
    protected $fillable = ['id_product', 'color_product', 'price'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the user that owns the ColorProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
