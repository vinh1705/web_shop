<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\City\CityVN;
use App\City\DistrictVN;
use App\Product;
use App\Users;
use App\AdmRepUserContact;
use App\AdmRepUserCart;

class UserCart extends Model
{
    protected $table = 'user_cart';
    protected $fillable = ['id', 'id_product', 'id_user', 'matp', 'maqh','name', 'phone', 'email', 'address', 'note'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the user that owns the UserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function CityVN()
    {
        return $this->belongsTo(CityVN::class, 'matp', 'matp');
    }

    /**
     * Get the user that owns the UserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function DistrictVN()
    {
        return $this->belongsTo(DistrictVN::class, 'maqh', 'mqh');
    }

    /**
     * Get all of the comments for the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users()
    {
        return $this->hasMany(Users::class, 'id_user', 'id');
    }

    /**
     * Get the user that owns the UserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the UserCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function AdmRepUserContact()
    {
        return $this->hasMany(AdmRepUserContact::class, 'id_user_cart', 'id');
    }

    public function AdmRepUserCart()
    {
        return $this->hasMany(AdmRepUserCart::class, 'id_user_cart', 'id');
    }
}


