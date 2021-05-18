<?php

namespace App;
use App\UserCart;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class AdmRepUserCart extends Model
{
    protected $table = 'adm_rep_user_cart';
    protected $fillable = ['id', 'id_user_cart', 'name', 'comment'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the user that owns the AdmRepUserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserCart()
    {
        return $this->belongsTo(UserCart::class, 'id_user_cart', 'id');
    }

    /**
     * Get the user that owns the AdmRepUserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }


}
