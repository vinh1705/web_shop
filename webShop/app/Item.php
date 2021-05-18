<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Items;
use App\Product;

class Item extends Model
{
    protected $table = 'name_company';
    protected $fillable = ['company', 'id_categories'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get the Items that owns the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Items()
    {
        return $this->belongsTo(Items::class, 'id_categories', 'id');
    }

    /**
     * Get all of the comments for the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product()
    {
        return $this->hasMany(Product::class, 'id_categories', 'id');
    }
}
