<?php

namespace App;
use DB;
use App\Order;
use App\Product;
use App\Post;
use App\InformationOrder;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'Users';
    protected $fillable = ['id_product','id_order', 'name', 'email', 'phone', 'city', 'district', 'ward', 'street', 'zip_code', 'note', 'int_order'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get the user associated with the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Order()
    {
        return $this->hasOne(Order::class, 'id_order', 'id');
    }

    /**
     * Get the user that owns the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    /**
     * Get all of the comments for the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Post()
    {
        return $this->hasMany(Post::class, 'id_admin', 'id');
    }

    /**
     * Get all of the comments for the Users
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function InformationOrder()
    {
        return $this->hasMany(InformationOrder::class, 'id_user', 'id');
    }
}
