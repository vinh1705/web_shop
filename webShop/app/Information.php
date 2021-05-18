<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Information extends Model
{
    protected $table = "information";
    protected $fillable = ['id', 'id_product', 'gb', 'ram',
    'price', 'technology_screen', 'resolution','wide_screen',
    'chip', 'network', 'sim', 'weight', 'pin', 'HDH'];
    public $timestamps = false;

    /**
     * Get the user that owns the Information
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
