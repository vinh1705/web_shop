<?php

namespace App;
use App\Item;
use App\Users;
use App\Information;
use App\ColorProduct;
use App\GB_RAM;
use App\Sale;
use App\UserCart;
use App\Post;
use App\InformationOrder;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id', 'id_categories', 'name', 'price_sale', 'percent','slug', 'sl', 'note', 'int_order'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the Item that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Item()
    {
        return $this->belongsTo(Item::class, 'id_categories', 'id');
    }
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users()
    {
        return $this->belongsTo(Users::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Image()
    {
        return $this->hasMany(Image::class, 'id_product', 'id');
    }

    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function InformationOrder()
    {
        return $this->hasMany(InformationOrder::class, 'id_product', 'id');
    }

    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Information()
    {
        return $this->hasMany(Information::class, 'id_product', 'id');
    }

    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ColorProduct()
    {
        return $this->hasOne(ColorProduct::class, 'id_product', 'id');
    }

     /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
    public function GB_RAM()
    {
        return $this->hasMany(GB_RAM::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Sale()
    {
        return $this->hasMany(Sale::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserCart()
    {
        return $this->hasMany(UserCart::class, 'id_product', 'id');
    }

    /**
     * Get the user associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function AdmRepUserCart()
    {
        return $this->hasOne(AdmRepUsedrCart::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Post()
    {
        return $this->hasMany(Post::class, 'id_product', 'id');
    }
}

   
