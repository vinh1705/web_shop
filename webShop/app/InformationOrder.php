<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Users;
class InformationOrder extends Model
{
    protected $table = "information_order";
    protected $fillable = ['id', 'id_product', 'id_cart','name_adm',
    'status', 'note'];
    public $timestamps = true;

    /**
     * Get all of the comments for the InformationOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product()
    {
        return $this->hasMany(Product::class, 'id_product', 'id');
    }

    /**
     * Get the user that owns the InformationOrder
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users()
    {
        return $this->belongsTo(Users::class, 'id_user', 'id');
    }
}
