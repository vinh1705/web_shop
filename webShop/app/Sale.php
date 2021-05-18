<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Sale extends Model
{
    protected $table = 'sale';
    protected $fillable = ['id_product','sale', 'bao_hanh'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the user that owns the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
