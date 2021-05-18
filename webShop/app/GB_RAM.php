<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class GB_RAM extends Model
{
    protected $table = "gb_ram";
    protected $fillable = ['id_product', 'gb', 'ram', 'price'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the user that owns the GB_RAM
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
