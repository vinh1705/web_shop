<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'item_categories';
    protected $fillable = ['categories'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Get all of the Item for the Items
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Item()
    {
        return $this->hasMany(Item::class, 'id_categories', 'id');
    }
}
