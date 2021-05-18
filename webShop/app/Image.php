<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "img";
    protected $fillable = ['id_product', 'img'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the user that owns the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
